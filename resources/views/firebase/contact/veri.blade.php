<style>

.çerçeve {
    border: 3px solid  rgb(29, 82, 33);
  border-radius: 5px;
 
  margin-left: 190px;
  margin-right: 190px;



}
.bilgiler {
    margin-left: 300px;
    font:20px  Times Neew;
color:rgb(29, 82, 33);



}
.bilgileriki {
    position:fixed;
    margin-left: 700px;
   top: 170px;
    font:20px  Times Neew;
color:rgb(29, 82, 33);



}
.button {
  background-color:#008773;
  color: inherit;
  border: none;
  border-radius: 8px;
  color:rgb(250, 250, 255);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block; }
</style>
@forelse ($contacts  as $key => $item)
   <!--https://www.youtube.com/watch?v=tmYHKgxXgcU&list=PLRheCL1cXHrsiMM3NmWMeEBrO6_XHSt5j&index=4 kaynak olarak kullanılmıştır-->
<div class="çerçeve">
<div class="bilgiler"   > 
<p><b>Adı : </b>{{$item['adı']}}</p>
<p><b>Soyadı : </b>{{$item['soyadı']}}</p>
<p><b>Mail : </b>{{$item['e-mail']}}</p>
<p><b>Numara : </b>{{$item['numara']}}</p>
<a href="{{url('password/'.$key)}}" class="button">Sifremi Değiştir</a>
</div>
<br>

</div>
@empty

@endforelse