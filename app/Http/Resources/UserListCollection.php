<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Carbon\Carbon;

class UserListCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                return [
                    'id' => $data->id,
                    'first_name' => $data->first_name,
                    'last_name' => $data->last_name,
                    'email' => $data->email,

                    'company_name' => $data->experience[0]->company_name,
                    'role' => $data->experience[0]->role,
                    'job_start_date' => Carbon::createFromFormat('Y-m-d',$data->experience[0]->job_start_date)->format('M Y') ,
                    'job_end_date' => $data->experience[0]->job_start_date == NULL? 'Current Job':Carbon::createFromFormat('Y-m-d',$data->experience[0]->job_end_date)->format('M Y') ,
                    'company_description' => $data->experience[0]->company_description,

                    'organization_name' => $data->experience[0]->organization_name,
                    'associated_as' => $data->experience[0]->associated_as,
                    'organization_start_date' => Carbon::createFromFormat('Y-m-d',$data->experience[0]->organization_start_date)->format('M Y') ,
                    'organization_end_date' => $data->experience[0]->organization_start_date == NULL? 'Current Organization': Carbon::createFromFormat('Y-m-d',$data->experience[0]->organization_end_date)->format('M Y'),
                    'organization_description' => $data->experience[0]->organization_description,
                ];
            })
        ];
    }
}
