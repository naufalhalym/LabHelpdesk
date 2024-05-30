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
                'nama' => 'Super Admin',
                'bagian' => 'IT Support Team',
                'jabatan' => 'IT Support Level 3',
                'id_stasiun' => 'AX',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13132',
                'nama' => 'Admin IT Support',
                'bagian' => 'IT Support Team',
                'jabatan' => 'IT Support Level 6',
                'id_stasiun' => 'AVR',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13133',
                'nama' => 'Admin IT Support 2',
                'bagian' => 'IT Support Team',
                'jabatan' => 'IT Support Level 5',
                'id_stasiun' => 'KCV',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13134',
                'nama' => 'Manajer IT Support',
                'bagian' => 'IT Support Team',
                'jabatan' => 'IT Support Level 3',
                'id_stasiun' => 'KMD',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13135',
                'nama' => 'Nardi',
                'bagian' => 'Commercial Division',
                'jabatan' => 'Staff',
                'id_stasiun' => 'RPL',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'nip' => '13136',
                'nama' => 'Rifky YM',
                'bagian' => 'CTIP',
                'jabatan' => 'IT Specialist Level 4',
                'id_stasiun' => 'AX',
                'created_at' => \Carbon\Carbon::now(),
            ]
        ];

        // Memasukkan data pegawai ke dalam tabel pegawai
        DB::table('pegawai')->insert($pegawai);
    }
}
