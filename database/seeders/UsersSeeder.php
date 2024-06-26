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
                'email' => 'teknisi1@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'admin')->first()->id_role,
                'nip' => '13132',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'teknisi2@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'admin')->first()->id_role,
                'nip' => '13133',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'kaprodi@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'manager')->first()->id_role,
                'nip' => '13134',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'kalab@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => false,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '13135',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'ufalsayed@poliban.ac.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '13136',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];

        // Memasukkan data user ke dalam tabel users
        User::insert($users);
    }
}
