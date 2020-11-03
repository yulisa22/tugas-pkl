<?php

use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('lokasi')->insert([
            'nama' => 'yulisa',
            'nis' => '11807500',
            'kelas' => 'xii rpl 2',
            'cita_cita' => 'taruni',
            'alamat' => 'sukabumi'
        ]);
       
    }
}
