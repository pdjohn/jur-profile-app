<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company_name', 'role', 'job_star_date', 'job_end_date', 'company_description',
        'organization_name', 'associated_as', 'organization_start_date', 'organization_end_date', 'organization_description',
    ];


}
