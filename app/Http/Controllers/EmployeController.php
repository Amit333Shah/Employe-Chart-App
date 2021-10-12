<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;
use Carbon\Carbon;

class EmployeController extends Controller
{
    function addEmploye(Request $req){
        $req->validate([
            'name'=>'required',
            'dateOfBirth'=>'required',
            'dateOfJoining'=>'required',
            'Location'=>'required',
            'phone'=>'required|min:10|max:12',
            'status'=>'required',
        ]);

        $employe=new Employe;
        $employe->name=$req->name;
        $employe->dateOfBirth=$req->dateOfBirth;
        $employe->dateOfJoining=$req->dateOfJoining;
        $employe->Location=$req->Location;
        $employe->phone=$req->phone;
        $employe->status=$req->status;
        $query=$employe->save();
        if($query){
            return back()->with('success','Insert Succesfully');
        }
    }

    function showEmploye(){
        $data=Employe::all();
        return view('showEmploye',['employeData'=>$data]);
    }
    function editEmploye($id){
        $data=Employe::find($id);
        return view('editEmploye',['employeData'=>$data]);
    }
    function updateEmploye(Request $req){
        $req->validate([
            'name'=>'required',
            'dateOfBirth'=>'required',
            'dateOfJoining'=>'required',
            'Location'=>'required',
            'phone'=>'required|min:10|max:12',
            'status'=>'required',
        ]);

        $employe=Employe::find($req->id);
        $employe->name=$req->name;
        $employe->dateOfBirth=$req->dateOfBirth;
        $employe->dateOfJoining=$req->dateOfJoining;
        $employe->Location=$req->Location;
        $employe->phone=$req->phone;
        $employe->status=$req->status;
        $employe->save();
        return redirect('/');

    }
    function deleteEmploye($id){
       $query= Employe::destroy($id);
       if($query){
        return back()->with('success','Deleted successfully');
       }
    }

    function chartEmploye(){
        $post = DB::table('employes')->get('*')->toArray();
        foreach($post as $row)
         {
            $data[] = array
             (
              'label'=>$row->name,
              'y' => Carbon::parse($row->dateOfBirth)->age        
             ); 
         }
        return view('statics',['data' => $data]);
     }

    function locationChart(){
        $post1=DB::select(DB::raw("select count(*) as total_city,
        Location from employes group by Location"));
        foreach($post1 as $row){
            $data1[]=array
            (
                'label'=>$row->Location,
                'y'=>$row->total_city

            );
        }
        return view('locationChart',['data1'=>$data1]);
    }
    // function ageChart(){
    //     $data=DB::select("select TIMESTAMPDIFF(YEAR, dateOfBirth, CURDATE()) AS AGE FROM employes");
    //     return $data;
    // }
}
