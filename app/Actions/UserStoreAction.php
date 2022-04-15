<?php
        
namespace App\Actions;


use App\Models\Experience;
use App\Models\User;
use Carbon\Carbon;

class UserStoreAction
{
    public static function execute($requestData)
    {
        $user = new User();
        $user->first_name = $requestData['first_name'];
        $user->last_name = $requestData['last_name'];
        $user->email = $requestData['email'];
        $user->password = $requestData['password'];
        $user->save();

        $experience = new Experience();
        $experience->user_id = $user->id;
        $experience->company_name = $requestData['company_name'];
        $experience->role = $requestData['role'];
        $experience->job_start_date = Carbon::createFromFormat('Y-m-d', $requestData['job_start_date']);
        $experience->job_end_date = $requestData['job_end_date'] == NULL && $requestData['current_job'] == 1 ? NULL : Carbon::createFromFormat('Y-m-d', $requestData['job_end_date']);
        $experience->company_description = $requestData['company_description'];
        $experience->organization_name = $requestData['organization_name'];
        $experience->associated_as = $requestData['associated_as'];
        $experience->organization_start_date = Carbon::createFromFormat('Y-m-d', $requestData['organization_start_date']);
        $experience->organization_end_date = $requestData['organization_end_date'] == NULL && $requestData['current_organization'] == 1 ? NULL : Carbon::createFromFormat('Y-m-d', $requestData['organization_end_date']);
        $experience->organization_description = $requestData['organization_description'];
        $experience->save();

        return $user;

    }
}