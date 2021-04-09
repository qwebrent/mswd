<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PWDInfo;

class Gender extends Model
{
    protected $table = 'gender';
    protected $guarded = [];

    public function pwdinfos(){
        return $this->hasMany(PWDInfo::class);
    }
}
