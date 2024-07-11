<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\RoleModel;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'superadmin@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'superadmin')->first()->id_role,
                'nip' => '13131',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'arif@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'teknisi')->first()->id_role,
                'nip' => '13132',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'ilyas@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'teknisi')->first()->id_role,
                'nip' => '13133',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'fuadsholihin@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'kaprodi')->first()->id_role,
                'nip' => '13135',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'dhapoliban@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => false,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '13136',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'wanvysaputra@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '13137',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];

        // Memasukkan data user ke dalam tabel users
        User::insert($users);
    }
}
