<?php

namespace Database\Seeders;

use App\Models\pengaturan\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            "nama" => "Microsoft",
            "deskripsi" => "lorem ipsum",
            "image" => "client/eIqxVqbcaq8rzb2r4XsP3RhkwnSyMMD5Zz5AaaDV.png"
        ]);
        Client::create([
            "nama" => "Google",
            "deskripsi" => "lorem ipsum",
            "image" => "client/034Qn1RPRXEdJ7fBouNmTeUgLntMzWdcw4mh77eG.png"
        ]);
        Client::create([
            "nama" => "Android Enterprise",
            "deskripsi" => "lorem ipsum",
            "image" => "client/Pdsrgp16lzwYCRMbxfhaLIis6OJi7X41sw08Z9cE.png"
        ]);
        Client::create([
            "nama" => "SOTI",
            "deskripsi" => "lorem ipsum",
            "image" => "client/cOBvHD17t1BxvCiqZJCw55zjJBIhAMX5tAiaqMAa.jpg"
        ]);
    }
}
