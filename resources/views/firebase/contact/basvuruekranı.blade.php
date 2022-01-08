<!DOCTYPE html>
<html lang="en">
   
    <style>


    button {
        background-color:#008773;
        color: inherit;
        border: none;
        border-radius: 8px;
        color:rgb(250, 250, 255);
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    
    </style>
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>
            Basvuru
        </title>
    </head>
    <body>
        <div class="tumu">
        
        <h1 style="color: darkgreen ; text-align:center;">
            Basvuru Ekranı
        </h1>
        <br>
        <br>
        <br>
        <br>
        <input name="" type="file" style="margin-left: 600px ; color : #008773; background-color:#008773;
        color: inherit;
        border: none;
        border-radius: 8px;
        color:rgb(250, 250, 255);
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block; "/>
        <br>
       <br>
       <br>
      
        <button style="margin-left: 715px;">
            Ekle
        </button>
        </div>
         
        
        <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-storage.js"></script>
        <input type="button" value ="PDF Görüntüle" id="viewbtn" onclick="showimage();">
        <div style="border:1px solid #000;">
        <embed src="test"  height="900" width="100%" controller="true" target="myself">
        </div>
         <!-- https://firebase-php.readthedocs.io/en/latest/cloud-storage.html , https://www.youtube.com/watch?v=DmkoQv0yGdw kaynak olarak kullanılmıştır -->
        <script>

        var firebaseConfig = {
          apiKey: "AIzaSyDiRZ93_GhDFROyHX562a13MuLe0zGtkOc",
          authDomain: "proje2-e7a60.firebaseapp.com",
          databaseURL: "https://proje2-e7a60-default-rtdb.firebaseio.com",
          projectId: "proje2-e7a60",
          storageBucket: "proje2-e7a60.appspot.com",
          messagingSenderId: "897103322865",
          appId: "1:897103322865:web:1ec991f62b8e2ef0da9350",
          //measurementId: "G-QPMBYLPMDV"
        };
      
        firebase.initializeApp(firebaseConfig);
        
      </script> 
     
      <script>
const btn = document.querySelector('button')
btn.addEventListener('click',e =>{
	const file = document.querySelector('input').files[0]
	const storageRef = firebase.storage().ref()

const final =storageRef.child(`pdf/${file.name}`)
	const task = final.put(file)

task.on('state_changed',
		function progress(progress){

			console.log(progress.bytesTransferred / progress.totalBytes *100)
		},  
		function error(err){
			console.log('There was An Err ' + err)
		},
		 function completed(){
		 	final.getDownloadURL()
		 	.then(url=>{
		 		document.querySelector('body').innerHTML =`<embed src=${url} width="1000" height="1000" />`
		 	})
		 }

		)

})
      </script>
      
          <script>

    var path = spaceRef.fullPath;
            var gsReference = storage.refFromURL('proje2-e7a60.firebaseapp.com')
     function showimage() {



         var storageRef = firebase.storage().ref();
         var spaceRef = storageRef.child(`images/191307039_cap.pdf`);
         storageRef.child(`images/191307039_cap.pdf`).getDownloadURL().then(function(url) {
             var test = url;
             alert(url);
             document.querySelector('embed').src = test;

         }).catch(function(error) {

         });


     }
         
        </script>

</body>
</html>