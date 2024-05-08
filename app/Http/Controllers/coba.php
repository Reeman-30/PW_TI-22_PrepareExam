<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coba extends Controller
{
    public function index(){
        return view('pertemuan-5.Pertemuan5');
    }

    public function LatihanPB(){
        $Mahasiswa[] = array("nama"=>"Fajar", "npm"=>"222310050", "gpa"=>"3.0", "rank"=>"7", "semester"=>"8");
        $Mahasiswa[] = array("nama"=>"Shopie", "npm"=>"222310062", "gpa"=>"3.68", "rank"=>"4", "semester"=>"2");
        $Mahasiswa[] = array("nama"=>"Faqih", "npm"=>"222310047", "gpa"=>"3.50", "rank"=>"6", "semester"=>"6");
        $Mahasiswa[] = array("nama"=>"Siti", "npm"=>"222310054", "gpa"=>"3.70", "rank"=>"3", "semester"=>"4");
        $Mahasiswa[] = array("nama"=>"Risma", "npm"=>"222310015", "gpa"=>"3.83", "rank"=>"1", "semester"=>"4");
        $Mahasiswa[] = array("nama"=>"Andin", "npm"=>"222310072", "gpa"=>"3.60", "rank"=>"5", "semester"=>"6");
        $Mahasiswa[] = array("nama"=>"Rizky", "npm"=>"222310000", "gpa"=>"3.80", "rank"=>"2", "semester"=>"5");

        return view('coba')->with('mahasiswa', $Mahasiswa);

    }

    public function LatihanPA(){
        return view('pertemuan-5.P5LatihanPA');
    }

}
