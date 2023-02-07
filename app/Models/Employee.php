<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','password','role','date_in','departement_id','position'
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    
}
