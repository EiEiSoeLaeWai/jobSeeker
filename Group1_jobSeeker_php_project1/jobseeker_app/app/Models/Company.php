<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Company extends Model
{
    public function jobs()

    {

        return $this->belongsToMany(Job::class, 'company_jobs');

    }
    // public function job() {
    //     return $this->hasOne('App\Models\CompanyJob');
    //    }
   

    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'company_id';
}
