


<!DOCTYPE html>
<html>
<head>
<style>
table {
  
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #3bb884d0;
}
</style>
</head>
<body>
<!--https://www.youtube.com/watch?v=tmYHKgxXgcU&list=PLRheCL1cXHrsiMM3NmWMeEBrO6_XHSt5j&index=4 kaynak olarak kullanılmıştır-->
<h2 style="text-align: center; color:#3bb884d0">Sistemde Bulunan Öğrenciler</h2>
<table>
<tr>
    <th>Numara</th>
    <th>İsim</th>
    <th>Soyisim</th>
    <th>Sınıf</th>
  </tr>
@forelse ($veriler  as $key => $item)

    <tr>
      <td>{{$item['adı']}}</td>
      <td>{{$item['soyadı']}}</td>
      <td>{{$item['numara']}}</td>
      <td>{{$item['sınıf']}}</td>
    </tr>
@empty

@endforelse
</table>
<br>
<br>
<br>
<br>
<h2 style="text-align: center; color:#3bb884d0">Başvurular</h2>
  
  <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-storage.js"></script>
  <input type="button" value ="PDF Görüntüle" id="viewbtn" onclick="showimage();">
  <div style="border:1px solid #000;">
  <embed src="test"  height="900" width="100%" controller="true" target="myself">
 
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
