<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'contact';
    }

    /*public function index() {
       
        $contacts = $this->database->getReference( $this->tablename)->orderByChild('numara')->equalTo('191307023')->getSnapshot()->getValue();

        return view('firebase.contact.index', compact('contacts'));
    }*/
    public function create() {
        return view('firebase.contact.yenikayıt');
    }
    public function logın() {
  
        return view('welcome');
    }
    public function store(Request $request) {
        //https://www.youtube.com/watch?v=NvHfCfMiE8c&list=PLRheCL1cXHrsiMM3NmWMeEBrO6_XHSt5j&index=3 kaynak olarak kullanılmıştır.
        $postData = [
            'adı' => $request ->ad,
            'soyadı' => $request ->soyad,
            'numara' => $request ->numara,
            'e-mail' => $request ->email,
            'telno' => $request ->telno,
            'tcno' => $request ->tcno,
            'adres' => $request ->adres,
            'sınıf' => $request ->sınıf,
            'sifre' => $request ->sifre,
            'fakulte' => $request ->fakulte,
            'bolum' => $request ->bolum,
        ];
        $postRef = $this->database->getReference( $this->tablename)->push($postData);
        if($postRef){
            return redirect('anaekran')->with('status','Kayıdınız Başarı İle Gerçekleştirildi' );

        }
        else {

            return redirect('anaekran')->with('status','Kayıt Başarısız Oldu' );
        }
    }
   /* public function goster() {
        
        $editdata =  $this->database->getReference( $this->tablename)->getChild('-MrY9lm5XANX607IeVt4')->getValue();
        return view('firebase.contact.index', compact('editdata'));
    }*/
    public function denemeiki(Request $request) {
        
        $contacts = $this->database->getReference( $this->tablename)->orderByChild('numara')->equalTo($request ->ad)->getSnapshot()->getValue();
    

            
        
     
    
        if($this->database->getReference( $this->tablename)->orderByChild('sifre')->equalTo($request ->Pass)->getSnapshot()->getValue() != null&&$this->database->getReference( $this->tablename)->orderByChild('numara')->equalTo($request ->ad)->getSnapshot()->getValue()!= null  ){
            return view('firebase.contact.index', compact('contacts'));
       
        }
        else{
            return redirect('anaekran')->with('status','Hatalı Giriş' );

        }
        
        
    }
    public function sifre() {
        return view('firebase.contact.sifremiunuttum');
    }
    public function guncel(Request $request) {
       
        $contacts = $this->database->getReference( $this->tablename)->orderByChild('numara')->equalTo($request ->numara)->getSnapshot()->getValue();

        return view('firebase.contact.veri', compact('contacts'));
    }
   /* public function denemeiki(Request $request) {
        
        $contacts = $this->database->getReference( $this->tablename)->orderByChild('numara')->equalTo($request ->ad)->getSnapshot()->getValue();
        return view('firebase.contact.index', compact('contacts'));
        

    }*/
    public function storeiki($id)  {
        //https://www.youtube.com/watch?v=sv2G9SVObHk&list=PLRheCL1cXHrsiMM3NmWMeEBrO6_XHSt5j&index=5 kaynak olarak kullanılmıştır.
        $key=$id;
        $editdata=$this->database->getReference( $this->tablename)->getChild($key)->getValue();
        if($editdata){

            return view ('firebase.contact.sifregir', compact('editdata','key'));
        }
        else {
 return redirect('contacts')->with('status' , 'ID bulunamadı');

        }


    }
    public function veridegistir (Request $request, $id) {
        $key=$id;
        $güncelleme = [
'sifre'=> $request->sifre 


        ];
$degistirme=$this->database->getReference($this->tablename.'/'.$key)->update($güncelleme);
if($degistirme){
    return redirect('anaekran')->with('status','İşleminiz Başarı İle Gerçekleştirildi' );

}
else {

    return redirect('anaekran')->with('status','İşlemeniz Başarısız Oldu' );
}
}

public function yazokulu() {
  
    return view('firebase.contact.yazokulubasvuru');
}
public function basvuru() {
  
    return view('firebase.contact.basvuruekranı');
}
public function yataygecis() {
  
    return view('firebase.contact.yataygecis');
}
public function capform() {
  
    return view('firebase.contact.capbasvuru');
}
public function dikeygecis() {
  
    return view('firebase.contact.dikeygecis');
}
public function dersıntıbakı() {
  
    return view('firebase.contact.intibak');
}
public function adminpanel() {
    return view('firebase.contact.admin');
}
public function denemeüc(Request $request) {
    $tablename='admin';
    $veriler = $this->database->getReference( $this->tablename)->getValue();
  

        
    
 

    if($this->database->getReference( $tablename)->orderByChild('sifre')->equalTo($request ->Pass)->getSnapshot()->getValue() != null&&$this->database->getReference($tablename)->orderByChild('numara')->equalTo($request ->ad)->getSnapshot()->getValue()!= null  ){
        //return redirect('anaekran')->with('status','Hatalı Giriş Değil' );
        return view('firebase.contact.adminsayfa', compact('veriler'));
   
    }
    else{
        return redirect('anaekran')->with('status','Hatalı Giriş' );

    }
    
    
}
public function foto() {
    return view('firebase.contact.fotograf');
}

}
