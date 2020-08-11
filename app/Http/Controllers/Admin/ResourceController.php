<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Employees;
use App\Http\Controllers\Controller;
use App\Designations;
use Validator;


class ResourceController extends Controller
{
    public function designation()
    {
       $designation = Designations::all();
        return response(json_encode($designation));
    }

    public function employeeLoad($page, $limit){

        $employee = Employees::limit($limit)->offset(($page-1)*$limit)->with('designation')->get();
        $data['employee'] = $employee;
        $data['number']=Employees::count();
        return json_encode($data);
    }
    public function employeeUpdate(Request $request){
        //return 1;
        foreach ($request->data as $id=>$employee){
            $validator = Validator::make($employee, [
                'emoplyee_no'       => 'string ',
                'name'              => ' string',
                //'designation_id'    => 'foreign_key:'.Designations::class,
                'department'        => 'string',
                'company'           => 'string',
                'salary'            => ' numeric ',
                'joining_date'      => ' date',
                'termination_date'  => ' date ',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 401,
                    'error'=>$validator->errors(),
                    'data' =>$request], 401);
            }
            else{
                $return = Employees::where('id',$id)->update($employee);
                return response()->json(['status' => 200, 'data'=>$return]);
            }
        }
        return $request->data;
    }
}
