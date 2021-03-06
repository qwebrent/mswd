<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PWDInfo;


class PWDDisability extends Model
{
    protected $table = 'pwddisabilities';

    protected $fillable =[
        'disability_id', 'disability_name'
    ];



    public function pwdinfos(){
        return $this->belongsTo(PWDInfo::class);
    }

}
