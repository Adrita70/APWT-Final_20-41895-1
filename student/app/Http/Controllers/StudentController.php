<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{   

    function list(){
        $sts = news::all();
        return response()->json($sts);
    }
    function create(Request $req){
        $validator = Validator::make($req->all(),[
            "title"=>"required",
            "description"=>"required",
            "type"=>"required",
            "date"=>"required",
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $st = new news();
        $st->title = $req->title;
        $st->description = $req->description;
        $st->type = $req->type;
        $st->date = $req->date;
        $st->save();
        return response()->json(["msg"=>"Success","data"=>$st]);
    }
    function searchid($id)
    { 
            $se= news::where('id',$id)->first();
             return response()->json($se);
        
    }
    function searchdate($date)
    { 
            $se1= news::where('date',$date)->first();
        return response()->json($se1);
        
    }
    function searchtype($type)
    { 
            $se2= news::where('type',$type)->get();
        return response()->json($se2);
        
    }
    function searchdt($type,$date)
    { 
            $se3= news::where('type','date',$type,$date)->get();
        return response()->json($se3);
        
    }
    function delete($id)
    { 
            $news= news::where('id',$id)->delete();
        return response()->json(["msg" =>"deleted"]);
        
    }
    function update(Request $req){
        $validator = Validator::make($req->all(),[
            "title"=>"required",
            "description"=>"required",
            "type"=>"required",
            "date"=>"required",
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $st = new news();
        $st->exists = true;
        $st->id = $req->id;
        $st->title = $req->title;
        $st->description = $req->description;
        $st->type = $req->type;
        $st->date = $req->date;
        $st->save();
        return response()->json(["msg"=>"Success","data"=>$st]);
    }
}
