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
                'nama' => 'Novia',
                'bagian' => 'Super Admin',
                'jabatan' => 'Administrasi',
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
                'nama' => 'Ade Ilyas,S.ST.',
                'bagian' => 'Teknisi 2',
                'jabatan' => 'Teknisi',
                'id_stasiun' => 'KCV',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13134',
                'nama' => 'Evi Widiastuti,A.Md',
                'bagian' => 'Teknisi 3',
                'jabatan' => 'Teknisi',
                'id_stasiun' => 'KCV',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13135',
                'nama' => 'Fuad Sholihin, S.T.,M.Kom.',
                'bagian' => 'Teknik Informatika',
                'jabatan' => 'Kepala Program Studi',
                'id_stasiun' => 'KMD',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13136',
                'nama' => 'Ida Hastuti,S.ST.,M.T.',
                'bagian' => 'Rekayasa Perangkat Lunak',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'RPL',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13137',
                'nama' => 'Wanvy Arifha Saputra,M.Kom.',
                'bagian' => 'Augmanted Reality & Virtual Reality',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'AVR',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13138',
                'nama' => 'Dr.Reza Fauzan,S.Kom.,M.Kom',
                'bagian' => 'Komputasi Cerdas Visual ',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'KCV',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13139',
                'nama' => 'Saberan,S.T.,M.T.',
                'bagian' => 'Komputer Dasar',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'KMD',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13140',
                'nama' => 'Arifin Noor Asyikin,S.T.,M.T.',
                'bagian' => 'Jaringan',
                'jabatan' => 'Kepala Laboratorium',
                'id_stasiun' => 'JAR',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13141',
                'nama' => 'Rahimi Fitri,S.Kom.,M.Kom',
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
