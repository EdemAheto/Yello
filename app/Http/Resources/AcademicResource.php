<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcademicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return[
        'id' =>$this->id,
        'outstanding_plant_student'=>$this->outstanding_plant_student,
        'outstanding_auto_student'=>$this->outstanding_auto_student,
        'outstanding_ref_student'=>$this->outstanding_ref_student,
        'outstanding_electrical_student'=>$this->outstanding_electrical_student,
        'outstanding_petroleum_student'=>$this->outstanding_petroleum_student,
        'outstanding_civil_student'=>$this->outstanding_civil_student,
        'outstanding_renewable_student'=>$this->outstanding_renewable_student,
        'outstanding_level_100_student'=>$this->outstanding_level_100_student,
        'outstanding_level_200_student'=>$this->outstanding_level_200_student,
        'outstanding_level_300_student'=>$this->outstanding_level_300_student,
        'outstanding_level_400_student'=>$this->outstanding_level_400_student,
        'outstanding_HND_student'=>$this->outstanding_HND_student,
        'outstanding_BTech_student'=>$this->outstanding_BTech_student,
        'outstanding_Welding_student'=>$this->outstanding_Welding_student,
        'created_at'=> $this->created_at,
        'updated_at'=> $this->updated_at,
       ];
    }
}
