<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PWDInfo;
use App\Gender;
use App\CivilStatus;
use App\Educbg;
use App\Barangay;
use App\Disability;
use App\PWDDisability;

class PWDController extends Controller
{
    public function index()
    {
        $pwdinfos = PWDInfo::get();
        return view('backend.search', compact('pwdinfos'));
    }

    public function create()
    {
        $pwd_gender = Gender::get();
        $civil_status = CivilStatus::get();
        $educ_bg = Educbg::get();
        $pwd_disabilities = Disability::get();
        $barangays = Barangay::get();
        return view('backend.create', compact('pwd_gender','civil_status','educ_bg', 'pwd_disabilities', 'barangays'));
    }

    public function store(Request $request, PWDInfo $pwdinfos)
    {
        $pwdinfos = PWDInfo::create([
            'last_name'=>$request->input('last_name'),
            'first_name'=>$request->input('first_name'),
            'mid_name'=>$request->input('mid_name'),
            'reg_num'=>$request->input('reg_num'),
            'sss_num'=>$request->input('sss_num'),
            'phealth_num'=>$request->input('phealth_num'),
            'b_day'=>$request->input('b_day'),
            'gender_id'=>$request->input('gender_id'),
            'civstatus_id'=>$request->input('civstatus_id'),
            'educbg_id'=>$request->input('educbg_id'),
            'mobile_num'=>$request->input('mobile_num'),
            'street_address'=>$request->input('street_address'),
            'barangay_id'=>$request->input('barangay_id'),
            'municipality'=>$request->input('municipality'),
            'province'=>$request->input('province'),
            'emp_status'=>$request->input('emp_status'),
            'emp_type'=>$request->input('emp_type'),
            'emp_nature'=>$request->input('emp_nature'),
            'pwd_skill'=>$request->input('pwd_skill'),

        ]);

        $disabilities = [];

        foreach ($request['disability_name'] as $disability){
            $disabilities[] = new PWDDisability([
                'disability_id'=>$pwdinfos->id,
                'p_w_d_info_id'=>$pwdinfos->id,
                'disability_name' => $disability,
            ]);
        }

        //dd($disabilities);
        //dd($pwdinfos);
        $pwdinfos->disabilities()->saveMany($disabilities);

        return redirect()->route('pwd.search');

    }

}
