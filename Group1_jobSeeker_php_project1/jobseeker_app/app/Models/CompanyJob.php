<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJob extends Model
{

    // public function company(){
    //     $company = Company::find(1);
    //     $jobs = $company->jobs;
    // }
    // public function company() {
    //     return $this->hasOne('App\Models\Company');
    //    }
    public function companies()

    {

        return $this->belongsToMany(Company::class, 'company_jobs');

    }
   
    use HasFactory;
    protected $primaryKey = 'companyjob_id';

}
