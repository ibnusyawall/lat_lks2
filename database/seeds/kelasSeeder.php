<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'namA_kelas' => 'XI RPL A',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];
        DB::table('t_kelas')->insert($data);

        $data = [
            'namA_kelas' => 'XI RPL A',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];

        DB::table('t_kelas')->insert($data)

       ;$data = [
            'namA_kelas' => 'XI RPL A',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];
        
        DB::table('t_kelas')->insert($data);
    }
}
