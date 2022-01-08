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

<div class="tumu">
<h2 style="color: #008773 ; margin-left:630px ; font-size:50px" >Şifremi Unuttum</h2>
            
            <div class="content">
                <div class="title m-b-md">
                    
                    <div class="login" style="margin-left: 650px;">    
                        <form id="login" method="POST" action="{{url('guncelleme')}}">    
                            @csrf
                              <div>  
                            <br><br>
                            <input type="text" name="numara" id="Uname" placeholder="Numaranız" style="border-radius: 5px; height:38px ; width:250px;background: transparent;" >    
                           
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit">
                            <a style= "color: inherit; text-decoration: none; left:600px" > Devam Et </a>
                          </button>  
                              </div>
                        </form>     
                    </div>
                </div>

            </div>
        </div>
      

