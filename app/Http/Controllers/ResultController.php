<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ResultController extends Controller
{
    // getting all data and sending it to all results
    public function Showall(){
    $result = DB::table('results')
            // ->select('id','name','father_name','mother_name','result')
            ->orderBy('id')
            ->cursorPaginate(5);
        return view('allresults', ['data' => $result]);
    }

    // viewing a single data of $id
    public function singlestudent(string $id){
        $result = DB::table('results')
                ->where('id',$id)
                ->get();
                return view('singleresult', ['data' =>$result]);
    }

    // delete one data of $id
    public function deleteresult(string $id){
        $result = DB::table('results')
                ->where('id',$id)
                ->delete();
                return redirect()->route('home');
    }

    // getting data for update of $id
    public function updateId(string $id){
        $result = DB::table('results')
                ->find($id);
        return view('updateresult',['data' => $result]);
    }

    // updating data here
    public function updateresult(Request $req, $id){
        $result =DB::table('results')
                ->where('id',$id)
                ->update([
                    'name' => $req->name,
                    'father_name' =>$req->father_name,
                    'mother_name' =>$req->mother_name,
                    'Maths' =>$req->Maths,            
                    'Physics' =>$req->Physics,            
                    'Chemistry' =>$req->Chemistry,            
                    'English' =>$req->English,            
                    'Hindi' =>$req->Hindi,    
                    // 'result' => $req->Result,                    
                    ]);
        if($result){
            return redirect()->route('home');
            // echo "<h1> Data Successfully Added. </h1>";
        } else {
            echo "<h1> Data Not Added. </h1>";
        }
    }
}
