        <!-- Styles -->
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
display: inline-block;

}
     </style>
 <!--
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
 

   <h2 style="color: #008773 ; margin-left:580px ; font-size:50px" >Kocaeli Üniversitesi</h2>
     
     <div class="content">
         <div class="title m-b-md">
             
             <div class="login" style="margin-left: 650px;">    
                 <form id="login" method="POST" action="{{url('deneme')}}"> 
                   @csrf   
                     @if(session('status'))
                     <h4>{{session('status')}}</h4>
                   @endif 
                         
                      <br><br>
                     
                     <input type="text" name="adı"  placeholder="Kullanıcı Adı" style="border-radius: 5px; height:38px ; width:250px; background-color:#96CEB4" > 

                     
                     <br><br>    
                        
                     <br>   
                     <input type="Password" name="Pass"  placeholder="Şifre" style="border-radius: 5px; height:38px ; width:250px; background-color:#96CEB4">    
                     <br> <br>
                   <a href={{url('yenikayıt')}} style="color: inherit;">Yeni Kayıt</a>         
                     &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="#" style="color: inherit;">Şifremi Unuttum</a> 
                    <br> 
                   <br>
                   <br>
                   
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit" >
                     <a  style="color: inherit; text-decoration: none; left:600px" >Giriş Yap</a>
                   </button>  
                   <br>
                   <br>
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button>
                     <a href={{url('contacts')}} style="color: inherit; text-decoration: none;">Admin Girişi</a>
                   </button> 
                  
                 </form>     
             </div>
         </div>

     </div>
 </div>
-->
<body>
 <div class="tumu">
 <br>
     <br>
     <br>
     <br>
     
     
     

     
     <h2 style="color: #0e311f ; margin-left:550px ; font-size:50px; text-align:center " >Admin Girişi</h2>
         
         <div class="content">
             <div class="title m-b-md">
                 
                 <div class="login" style="margin-left: 650px;">    
                     <form id="login" method="POST" action="{{url('admingiris')}}">    
                         @csrf
                         @if(session('status'))
                     <h4 style="margin-left: 10px">{{session('status')}}</h4>
                   @endif 
                           <div>  
                         <br><br>
                         <input type="text" name="ad" id="Uname" placeholder="Numaranız" style="border-radius: 5px; height:38px ; width:250px; background: transparent;">    
                         <br><br>  
                           
                     <input type="Password" name="Pass"  placeholder="Şifre" style="border-radius: 5px; height:38px ; width:250px; background: transparent;">    
                     <br>
                    <br>
                    
                       
                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit">
                         <a style= "color: inherit; text-decoration: none; left:600px" > Giriş Yap </a>
                       </button>  
                       <br>
                       <br>
                       <br>
                      
                           </div>
                     </form>     
                 </div>
             </div>

         </div>
     </div>

   </div>
</body>
</html>