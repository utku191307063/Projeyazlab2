<!DOCTYPE html>
<html dir="ltr" lang="tr" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .tumu {
  width: 1000px;
  height: 700px;
  
}

.tumu::after {
  content: "";
  background:  url('/img/Koaceli-Üniversitesi-Derslik-Grubu-2-Kısım-İnşaatı-Header.jpg');
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
            button {
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
<body>
    <br>
        <br>
        <br>
        <br>
        
        
    <div class="tumu"  > 

          <h2 style="color: #008773 ; margin-left:580px ; font-size:40px; text-align:center;" >Yeni Sifre Giriniz</h2>
            
            <div class="content">
                <div class="title m-b-md">
                    
                    <div class="login" style="margin-left: 650px;">    
                        <form id="login" method="POST" action="{{url('sifredegistir/'.$key)}}">    
                            @csrf
                            @method('PUT')
                              <div>  
                            <br><br>
                            <br>
                            <input type="Password" name="sifre" id="Pass" placeholder="Şifreniz" style="border-radius: 5px; height:38px ; width:250px; background: transparent;">    
                            <br> <br>
                           <br>
                           <br>
                           <br>
                          
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit">
                            <a style= "color: inherit; text-decoration: none; left:600px" > Sifre Degistir </a>
                          </button>  
                              </div>
                        </form>     
                    </div>
                </div>

            </div>
        </div>


</body>
</html>