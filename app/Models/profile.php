<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table='profile';
    protected $fillable =['id','name','country','user_id','gender','job','facebook','twitter'];

    public function user(){
       return $this->belongsTo(user::class,'user_id');
    }
}
