<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PWDInfo;

class PWDFiles extends Model
{
    protected $table = 'pwdfiles';
    protected $guarded = [];

    public function pwdinfos(){
        return $this->hasMany(PWDInfo::class);
    }
}
