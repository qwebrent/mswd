<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PWDInfo extends Model
{
    protected $table = 'pwdinfos';
    protected $fillable=[
        'last_name',
        'first_name',
          'mid_name',
           'reg_num',
           'sss_num',
       'phealth_num',
             'b_day',
         'gender_id',
      'civstatus_id',
         'educbg_id',
        'mobile_num',
    'street_address',
       'barangay_id',
      'municipality',
          'province',
        'emp_status',
          'emp_type',
        'emp_nature',
         'pwd_skill'
    ];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function civstatus(){
        return $this->belongsTo(CivilStatus::class);
    }

    public function educbg(){
        return $this->belongsTo(Educbg::class);
    }

    public function barangay(){
        return $this->belongsTo(Barangay::class);
    }

    public function disability(){
        return $this->belongsTo(Disability::class);
    }

    public function pwdfiles(){
        return $this->belongsTo(PWDFiles::class);
    }

    public function disabilities(){
        return $this->hasMany(PWDDisability::class);
    }

}
