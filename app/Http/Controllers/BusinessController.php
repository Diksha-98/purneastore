<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use App\Models\User;
use App\Models\Business;
use App\Models\Bitem;;
use App\Models\Review;
use Illuminate\Http\Request;
class BusinessController extends Controller


{

    public function homepage(){
        $business = Business::all();
        $data['record'] = [];
        return view("home");

    }
    public function index(Request $req){
        $business = Business::all();
       
        $review = Review::all();
        if ($req->search != ""){
            $bitem = Bitem::where("b_name", "LIKE", "%$req->search%")->orWhere("city", "LIKE", "%$req->search%")->get();
            return view("home",["bitem"=>$bitem,'business'=>$business,'review'=>$review]);
        }
        else{
            $bitem = Bitem::all();
        return view('home',['business'=>$business,'bitem'=>$bitem,'review'=>$review]); 
        }
    }

    public function insertbiz(Request $req){
        if($req->method()=="POST"){
        $req->validate([
            'b_name' => 'required|unique:businesses',
           'description' => 'required',
 
        ]);
        $i= new Business();
        $i->b_name = $req->b_name;
        $i->description = $req->description;
        $i->slug= str::slug($req->b_name,"-");
        $i->save();
        return redirect()->back();
  
    }
    return view("insertbiz");
}
public function insertreview(Request $req){
    $business = Bitem::all();
    if($req->method()=="POST"){
   
    $i = new Review();
    $i->business_id =  $req->business_id;
    $i->comment =  $req->comment;
    $i->name =  $req->name;
    $i->like =  $req->like;
    $i->save();
    return redirect()->back();
    
  }
  return view("filter",$data);
  
  }
public function insertbizitem(Request $req){
    $user = User::all();
    $business = Business::all();
    if($req->method()=="POST"){
    $req->validate([
        'user_id' => 'required',
        'business_id' => 'required',

    ]);
    
    $filename = $req->image->getClientOriginalName();
    $req->image->move(public_path("image"),$filename);

    $i= new Bitem();
    $i->user_id = $req->user_id;
    $i->business_id = $req->business_id;
    $i->contact = $req->contact;
    $i->state = $req->state;
    $i->city = $req->city;
    $i->address = $req->address;
    $i->b_name = $req->b_name;
    $i->open_time = $req->open_time;
    $i->close_time = $req->close_time;
    $i->type_of_service = $req->type_of_service;
    $i->description = $req->description;
    $i->image= $filename;
    $i->save();
    return redirect()->back();
    
}

return view("insertbizitem",["user"=>$user,"business"=>$business]);

}
public function register(Request $req){
    if( $req->method() == "POST"){
        $u = new User();
        $u->name = $req->name;
        $u->email = $req->email;
        $u->password = Hash::make($req->password);
        $u->save();
        return redirect()->route("login");

    }
    
    return view("register");
}
public function login(Request $req){

    if($req->method()== "POST"){
       $user = User::where("email",$req->email)->first();
   
           if(!$user || !Hash::check($req->password, $user->password)){
              return "<script>alert('error: email and password incorrect')</script>";
           }
           else{
               //storing session
               $req->session()->put("login",$req->email);
               //redirecting to homepage
               return redirect()->route("homepage");
           }

       }
    return view("login");
}
public function show($slug){
    
   $business = Business::where('slug',$slug)->first();
   $data = Bitem::where('business_id',$business->id)->get();
   return view("view",["data"=>$data]);
   

}


public function filter($id){
 $item = Bitem::where('id',$id)->first();
 $review = review::all();
    return view('filter',[
        "data"=>Bitem::where('id',$id)->get(),"review"=>$review
]);

//}
//public function filter($id){
//$item = Bitem::where('id',$id)->first();
//$review = Review::where('id',$item->id)->get();
//return view('filter',["item"=>$item,'review'=>$review,"pro"=>Bitem::where("id","!",$item->id)->where("Business_id",$item->business_id)->get()]);
  }


public function logout(Request $req){
    //session destroy
    $req->session()->flush();
    return redirect()->route('homepage');

}
// public function search(Request $req){
//     if ($req->search != ""):
//     return view("home",["data"=>Business::where("b_name", "LIKE", "%$req->search%")->get()]);

    
// else:
//     return redirect()->route("homeapge");
//     endif;
// }

public function like($id){
    $vo = Bitem::find($id);
    $vo->like++;
    $vo->save();

    return redirect()->back();

}

public function dislike($id){
 
    $vo = Bitem::find($id);
    $vo->dislike--;
    $vo->save();

   return redirect()->back();
}



}


