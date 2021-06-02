<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table='students';
	protected $primarykey='id';
    protected $fillable = ['firstname', 'lastname', 'dob',
        'c_address', 'p_address', 'gender',
        'f_name', 'f_number', 'f_email','f_occupation',
        'm_name', 'm_number', 'm_email', 'm_occupation',
        'l_name', 'l_number', 'relation', 'l_email', 'l_occupation',
        'grade', 'last_school', 'bus_needed', 'pickup_address'];


		//A student belong to a grade
        //A student belong to section
     public function grades()
    {
        return $this->belongsTo(Grade::class);
    }
     public function sections()
    {
        return $this->belongsTo(Section::class);
    }
}
