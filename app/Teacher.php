<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends  Model
{
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','subject','phone_no','qualification','dob','profile_pic','address'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }


     
    
}
