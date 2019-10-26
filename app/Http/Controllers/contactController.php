<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class contactController extends Controller
{
    public function contact()
    {
        $contact=DB::table('contacts')->get();
        return view('pages.contact',compact('contact') );
    }

    public function insert(){
        return view('pages.insert');
    }
    
    public function AddData(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['description']=$request->description;
        $data['gender']=$request->gender;
        //echo <"pre">
        //echo "$data"; 
        $infoData=DB::table('contacts')->insert($data);
        return redirect()->route('contact');
    }
    public function DeleteData($id)
    {
        $del=DB::table('contacts')->where('id',$id)->delete();
        return redirect()->route('contact');
    }

   public function EditData($id)
   {
       $edt=DB::table('contacts')->where('id',$id)->first();
       return view('pages.edit',compact('edt'));
   }

   public function UpdateData(Request $request,$id)
   {
       $data=array();
       $data['name']=$request->name;
       $data['phone']=$request->phone;
       $data['email']=$request->email;
       $data['description']=$request->description;
       $data['gender']=$request->gender;
       $sendData=DB::table('contacts')->where('id',$id)->update($data);
       return redirect()->route('contact');
   }
   public function ViewData($id){
       $view=DB::table('contacts')->where('id',$id)->first();
       return view('pages.view',compact('view'));
   }
        
}
