<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showEmployee(){

        $employee=Employee::all();
        return view('showEmployee')->with([
            'employees'=>$employee
        ]);

    }

    public function insertEmployee(){
        return view('insertEmployee');

    }

    public function storeEmployee(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'job'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'age'=>'required'
        ]);

        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $job=$request->input('job');
        $phone=$request->input('phone');
        $address=$request->input('address');
        $age=$request->input('age');

        Employee::create([
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'job'=>$job,
        'phone'=>$phone,
        'address'=>$address,
        'age'=>$age
        ]);
        return redirect('show-employee');
    }

    public function editEmployee($id){
      $employee=Employee::find($id);
        return view('editEmployee')->with([
            'employees'=>$employee
        ]);
    }

    public function updateEmployee(Request $request,$id){
    $employee=[
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'job'=>$request->job,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'age'=>$request->age
    ];
    Employee::where('id',$id)->update($employee);
    return redirect('show-employee');


    }

    public function deleteEmployee($id){
     Employee::where('id',$id)->delete();
     return redirect('show-employee');
    }
}
