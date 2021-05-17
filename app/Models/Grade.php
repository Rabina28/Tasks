<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table='grades';
	protected $primarykey='id';

	//Grade has many students.
	//Grade has many section. 

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    
}
