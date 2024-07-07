<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StasiunModel;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyiapkan data pegawai
        $stasiun = StasiunModel::all();

        $pegawai = [
            [
                'nip' => '13131',
                'nama' => 'Nenda',
                'bagian' => 'Super Admin',
                'jabatan' => 'Staff Admin',
                'id_stasiun' => 'AX',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13132',
                'nama' => 'Arif',
                'bagian' => 'Teknisi 1',
                'jabatan' => 'Teknisi',
                'id_stasiun' => 'AVR',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13133',
                'nama' => 'Ade',
                'bagian' => 'Teknisi 2',
                'jabatan' => 'Teknisi',
                'id_stasiun' => 'KCV',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13134',
                'nama' => 'Fuad Sholihin',
                'bagian' => 'Teknik Informatika',
                'jabatan' => 'Kepala Program Studi',
                'id_stasiun' => 'KMD',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13135',
                'nama' => 'Isna',
                'bagian' => 'Rekayasa Perangkat Lunak',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'RPL',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13136',
                'nama' => 'Wiyatmoko',
                'bagian' => 'Axioo',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'AX',
                'created_at' => \Carbon\Carbon::now(),
            ]
        ];

        // Memasukkan data pegawai ke dalam tabel pegawai
        DB::table('pegawai')->insert($pegawai);
    }
}
