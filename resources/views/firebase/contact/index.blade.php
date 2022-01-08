<style>
.çerçeve {
    border: 3px solid  rgb(29, 82, 33);
  
 
  margin-left: 400px;
  margin-right: 400px;



}
.bilgiler {
    margin-left: 100px;
    font:20px  Times Neew;
color:rgb(29, 82, 33);



}
.bilgileriki {
    position:fixed;
    margin-left: 500px;
   top: 222px;
    font:20px  Times Neew;
color:rgb(29, 82, 33);



}





    </style>
<!--https://www.youtube.com/watch?v=tmYHKgxXgcU&list=PLRheCL1cXHrsiMM3NmWMeEBrO6_XHSt5j&index=4 kaynak olarak kullanılmıştır-->
@extends('firebase.app')

@section('content')
<br>
<br>
<br>
<p style="margin-left: 400px ; color:rgb(29, 82, 33); font-size:30px;"   >Profil </p> 
@forelse ($contacts  as $key => $item)

<div class="çerçeve">
<div class="bilgiler"   > 
<p><b>Adı : </b>{{$item['adı']}}</p>
<p><b>Soyadı : </b>{{$item['soyadı']}}</p>
<p><b>Mail : </b>{{$item['e-mail']}}</p>
<p><b>Numara : </b>{{$item['numara']}}</p>
<p><b>Bölüm : </b>{{$item['bolum']}}</p>
</div>
<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<div class="bilgileriki">
<p><b>TC : </b>{{$item['tcno']}}</p>
<p><b>Telefon : </b>{{$item['telno']}}</p>
<p><b>Sınıf : </b>{{$item['sınıf']}}</p>
<p><b>Adres  : </b>{{$item['adres']}}</p>
<!--<p>{{$item['sifre']}}</p> -->
<p><b>Fakülte : </b>{{$item['fakulte']}}</p>
<a href={{url('fotograf')}} style="color: inherit;">Fotoğraf ekle</a>
</div>
</div>
@empty

@endforelse


@endsection




  

