<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table='grades';
	protected $primarykey='id';

	//section has many students.
	//Section belongs to grade.

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function grades()
    {
        return $this->belongsTo(Grade::class);
    }
    

}
