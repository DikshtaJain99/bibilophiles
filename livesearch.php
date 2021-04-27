<?php

include_once("includes/connection.php");
$xmlDoc=new DOMDocument();
$query = "SELECT book_name,author,genre,agegroup,url FROM bookdetails";
$arr = array();
if ($result = $conn->query($query)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
       array_push($arr, $row);
    }
  
    if(count($arr)){
         createXMLfile($arr);
     }
    /* free result set */
    $result->free();
}
  function createXMLfile($arr){
    
     $filePath = 'book.xml';
     $dom     = new DOMDocument('1.0', 'utf-8'); 
     $root      = $dom->createElement('books'); 
     for($i=0; $i<count($arr); $i++){
       
       //$bookId        =  $arr[$i]['id'];  
       $bookName = htmlspecialchars($arr[$i]['book_name']);
       $bookAuthor    =  $arr[$i]['author']; 
       $bookGenre     =  $arr[$i]['genre']; 
       $bookAgeGroup      =  $arr[$i]['agegroup'];
        $bookUrl      =  $arr[$i]['url'];
       //$bookCategory  =  $arr[$i]['category'];  
       $book = $dom->createElement('book');
       
       $name     = $dom->createElement('book_name', $bookName); 
       $book->appendChild($name); 
       $author   = $dom->createElement('author', $bookAuthor); 
       $book->appendChild($author); 
       $genre    = $dom->createElement('genre', $bookGenre); 
       $book->appendChild($genre); 
       $agegroup     = $dom->createElement('agegroup', $bookAgeGroup); 
       $book->appendChild($agegroup);
        $url     = $dom->createElement('url', $bookUrl); 
       $book->appendChild($url);
   
       $root->appendChild($book);
     }
     $dom->appendChild($root); 
     $dom->save($filePath); 
   } 
$xmlDoc->load("book.xml");

$x=$xmlDoc->getElementsByTagName('book');

//get the q parameter from URL
$q=$_GET["q"];
//$w = $_GET["w"];
//echo $w;
//parse_str($_SERVER["QUERY_STRING"]);

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  //echo "Hi";
  for($i=0; $i<($x->length); $i++) {
    //echo $x->length;
    
    $y=$x->item($i)->getElementsByTagName("book_name");
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="No book with this name available.";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>