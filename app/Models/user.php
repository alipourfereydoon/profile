<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','password'

    ];
    public function address(){
        return $this->hasOne(address::class,'user_id');
    }
}
