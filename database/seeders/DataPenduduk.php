<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPenduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPenduduk = [
            [
                "nama" => "djumad bantan",
                "nik" => "1321094076",
                "role" => "raja",
                "password" => bcrypt("12345")
            ],
            [
                "nama" => "djum",
                "nik" => "1321094077",
                "role" => "admin",
                "password" => bcrypt("12345")
            ],
            [
                "nama" => "djumdjum",
                "nik" => "1321094078",
                "role" => "super-admin",
                "password" => bcrypt("12345")
            ],
            [
                "nama" => "djumad",
                "nik" => "1321094079",
                "role" => "penduduk",
                "password" => bcrypt("12345")
            ],
        ];
        foreach($dataPenduduk as $item){
            User::create($item);
        }
    }
}
