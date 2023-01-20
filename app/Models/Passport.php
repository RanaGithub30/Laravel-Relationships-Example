<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

    protected $table = "user_passports";
    protected $fillable = ['user_id', 'passport_no', 'valid_till'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
