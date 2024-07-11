<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class StasiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stasiun = [
            ['id_stasiun' => 'AX', 'nama_stasiun' => 'Axioo'],
            ['id_stasiun' => 'AVR', 'nama_stasiun' => 'Augmanted Reality Virtual Reality'],
            ['id_stasiun' => 'RPL', 'nama_stasiun' => 'Rekayasa Perangkat Lunak'],
            ['id_stasiun' => 'KCV', 'nama_stasiun' => 'Komputasi Citra Visi'],
            ['id_stasiun' => 'JAR', 'nama_stasiun' => 'Jaringan'],
            ['id_stasiun' => 'KMD', 'nama_stasiun' => 'Komputer Dasar']
        ];

        foreach ($stasiun as $data) {
            $createdAt = \Carbon\Carbon::now()->subDays(rand(1, 30));

            $data['created_at'] = $createdAt;
            DB::table('stasiun')->insert($data);
        }

        // $jumlah_data_pegawai = 500; // Jumlah data pegawai yang ingin dibuat

        // for ($i = 0; $i < $jumlah_data_pegawai; $i++) {
        //     $random_stasiun = $stasiun[array_rand($stasiun)]; // Memilih stasiun secara acak
        //     $id_stasiun = $random_stasiun['id_stasiun'];

        //     DB::table('pegawai')->insert([
        //         'nip' => Str::random(5), // Fungsi untuk menghasilkan string acak dengan panjang 5 karakter
        //         'nama' => Str::random(10),
        //         'bagian' => Str::random(20),
        //         'jabatan' => Str::random(8),
        //         'id_stasiun' => $id_stasiun
        //     ]);
        // }
    }
}
