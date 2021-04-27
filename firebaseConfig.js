	var firebaseConfig = {
    apiKey: "AIzaSyA3ED8SY1W_NnqPgIzl8wtWJeKyoQ7WbvU",
    authDomain: "bibliophiles-d04f1.firebaseapp.com",
    databaseURL: "https://bibliophiles-d04f1.firebaseio.com",
    projectId: "bibliophiles-d04f1",
    storageBucket: "bibliophiles-d04f1.appspot.com",
    messagingSenderId: "932137122913",
    appId: "1:932137122913:web:67c88ebe1c94b705d77e20"
  };
  
  	firebase.initializeApp(firebaseConfig);
  	const storage = firebase.storage();
    const storageRef = storage.ref();