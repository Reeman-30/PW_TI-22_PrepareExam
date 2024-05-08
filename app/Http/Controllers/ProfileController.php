<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function index() {
        $mahasiswa = [
            [
                "id" => 1,
                "nama" => "Irvan Rizky Ariasnyah",
                "npm" => 222310001,
                "gender" => "Male",
                "gpa" => 3.8,
                "rank" => 1,
                "semester" => 8
            ],
            [
                "id" => 2,
                "nama" => "Reguel Dos Santos",
                "npm" => 222310002,
                "gender" => "Male",
                "gpa" => 3.74,
                "rank" => 2,
                "semester" => 4],
            [
                "id" => 3,
                "nama" => "Raden Rayyan Pratama Rakhmadie",
                "npm" => 222310003,
                "gender" => "Male",
                "gpa" => 3.75,
                "rank" => 3,
                "semester" => 6
            ],
            [
                "id" => 4,
                "nama" => "Dendi Nur Alamsyah",
                "npm" => 222310004,
                "gender" => "Male",
                "gpa" => 3.75,
                "rank" => 4,
                "semester" => 4],
            [
                "id" => 5,
                "nama" => "Hera Dwi Pradita",
                "npm" => 222310005,
                "gender" => "Female",
                "gpa" => 3.5,
                "rank" => 5,
                "semester" => 6
            ],
            [
                "id" => 6,
                "nama" => "Muhamad Rizki Fadhli",
                "npm" => 222310006,
                "gender" => "Male",
                "gpa" => 3.52,
                "rank" => 6,
                "semester" => 6
            ],
            [
                "id" => 7,
                "nama" => "Muhammad Rishila Amran Malik",
                "npm" => 222310007,
                "gender" => "Male",
                "gpa" => 3.42,
                "rank" => 7,
                "semester" => 4
            ]
        ];

        return view("profile", [
            "data" => $mahasiswa
        ]);
    }

}
