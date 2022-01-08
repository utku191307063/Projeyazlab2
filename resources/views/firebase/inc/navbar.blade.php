
<style>

nav {   
 width: 100%;   
background:white;
text-align : center;
overflow: auto;
margin-left: 20px;

}
nav ul  {
list-style: none;
}
nav li {
display: inline-block;


}
nav li a {

display: block;
padding: 15px 20px;
font:20px  timesnewroman;
color:rgb(29, 82, 33);
text-decoration: none;

}
nav li a:hover{
color:rgb(15, 218, 157);
}

nav li ul 
{
text-align:left;
display:none;
position:absolute;
padding: 10px 10px;


}
nav li:hover ul {
display:block;


}
nav li ul li {
display:inline-block;
text-align:left;

}
nav li ul li a{
    color:rgb(29, 82, 33);
}


@media (max-width: 700px) {
  .logo img{
 width: 20%;
  }
  nav {
  margin-left: 20px;

  }
 }
 @media (max-width: 700px) {
  nav li ul  {
 width: 10%;
  }
 }
  </style>
<nav>
   
<ul>
<li><a href={{url('yob')}} >Yaz Okulu Başvurusu</a></li>
<li><a href={{url('ygb')}}>Yatay Geçis Başvurusu</a>

</li>
<li><a href={{url('dkb')}}>DGS Başvurusu</a></li>
<li><a href={{url('cap')}}>ÇAP Başvurusu</a></li>

<li><a href={{url('dıb')}}>Ders İntikabı Başvurusu</a>

</li>
<li><a href={{url('basvurularım')}}>Başvurularım</a></li>

</ul>
</nav>