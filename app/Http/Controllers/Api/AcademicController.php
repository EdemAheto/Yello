<?php

namespace App\Http\Controllers\API;

use App\Models\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\AcademicResource;
use Validator;

class AcademicController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic = Academic::all();
        return AcademicResource::collection($academic);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'outstanding_plant_student'=> 'required',
            'outstanding_auto_student'=> 'required',
            'outstanding_ref_student'=> 'required',
            'outstanding_electrical_student'=> 'required',
            'outstanding_petroleum_student'=> 'required',
            'outstanding_civil_student'=> 'required',
            'outstanding_renewable_student'=> 'required',
            'outstanding_level_100_student'=> 'required',
            'outstanding_level_200_student'=> 'required',
            'outstanding_level_300_student'=> 'required',
            'outstanding_level_400_student'=> 'required',
            'outstanding_HND_student'=> 'required',
            'outstanding_BTech_student'=> 'required',
            'outstanding_Welding_student'=> 'required'
        ]);

        if($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
       
        $academic = Academic::create($input);
        return $this->sendResponse(new AcademicResource($academic), 'Academic category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $academic = Academic::find($id);
        if(is_null($academic)){
            return $this->sendError('Academic category not found', 404);
        }
        return $this->sendResponse(new AcademicResource($academic), 'Academic category successfully retrieved');
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $academic = Academic :: find($id);

         $academic->update($request->all());

         return response()->json([
            "success"=>true,
            "academic"=>$academic
         ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $academic = Academic::find($id);
        if(is_null($academic)){
            return $this->sendError('Academic category not found', 404);
        }
        $academic->delete();
        return $this->sendResponse('Academic category successfully deleted');
    }
}
