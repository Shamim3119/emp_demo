<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ControllerEmp extends Controller
{
    public function show()
    {
        $data =  Employee::all();
        return view('employee', ['employees' => $data]);
    }

    function delete(Request $req)
    {

        $employee = Employee::find($req->pk_id);
        $employee->delete();
        return redirect('/');
    }

    function execute(Request $req)
    {
        $employee = new Employee;
        if($req->pk_id > 0)
        {
            $employee = Employee::find($req->pk_id);
        }

        if((!empty($_FILES["photo"])) && ($_FILES['photo']['error'] == 0))
        {
            $filename = basename($_FILES['photo']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if(($ext=="png") || ($ext=="jpg") || ($ext=="gif") || ($ext=="ico")  )
            {
                $newname = dirname(__FILE__).'../../../../public/photo/'.$filename;
                $path = dirname(__FILE__).'../../../../public/photo/';
                
                $filename = $_FILES['photo'];
                $filename  = strtolower($filename['name']);
                $filename  = preg_replace("/[^A-Z0-9._-]/i", "_", $filename);
                $uniqid = uniqid();
                $filename = $uniqid."_".$filename;
                
                if(file_exists($newname))
                    unlink($newname);
                   
                $newname = $path.$filename;

              //  if(move_uploaded_file($_FILES['photo']['tmp_name'],$newname))
              //  {
                    $employee->name = $req->name;
                    $employee->address = $req->address;
                    $employee->phone = $req->phone;
                    $employee->email = $req->email;
                    $employee->photo = $filename;
               // }
            }
        }
        else 
        {

            $employee->name = $req->name;
            $employee->address = $req->address;
            $employee->phone = $req->phone;
            $employee->email = $req->email; 
        }

       $employee->save();
       return redirect('/');
    }
    //
}
