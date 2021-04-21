<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Header;
class HeadertopController extends Controller
{
	 public function edit(Request $request,$id){
	 	$this->data['header'] = Header::find($id);
	 	
    	return view('header.index',$this->data);
    }
    public function update(Request $request, $id){
    	
       
       $this->data =  $request->all();
       $header = Header::find($id);
       $header->email = $this->data['email'];
       $header->phone = $this->data['phone'];
       $header->address = $this->data['address'];

    	if( $header->save()){
    		 Session::flash('message','header Updated Successfully');
    	}
    	 return redirect()->to('admin/users');

    }
}
