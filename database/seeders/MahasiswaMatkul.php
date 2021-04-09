<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatkul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            'id_mahasiswa' => 11,
            'nim' => '201921312',
            'nama' => 'test',
            'jurusan' => 'Teknik Informatika',
            'email' => 'test@mail.com',
            'alamat' => 'malang',
            'ttl' => Carbon::now(),
            'kelas_id' => 1
        ];
        $khs = [
            ['mahasiswa_id' => 11, 'matakuliah_id' => 1, 'nilai' => 'A'],
            ['mahasiswa_id' => 11, 'matakuliah_id' => 2, 'nilai' => 'A'],
            ['mahasiswa_id' => 11, 'matakuliah_id' => 3, 'nilai' => 'A'],
            ['mahasiswa_id' => 11, 'matakuliah_id' => 4, 'nilai' => 'A'],
        ];
        DB::table('mahasiswa')->insert($mhs);
        DB::table('mahasiswa_matakuliah')->insert($khs);
    }
}
