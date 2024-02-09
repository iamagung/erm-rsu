<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void{
		User::create([
			'name' => 'Agung Pratama',
			'username' => 'admin',
			'level_user' => 'superadmin',
			'password' => bcrypt('admin'),
			'show' => Crypt::encryptString('admin'),
		]);
		User::create([
			'name' => 'Terapis',
			'username' => 'terapis',
			'level_user' => 'terapis',
			'jenis_nakes' => 'fisioterapis',
			'password' => bcrypt('terapis'),
			'show' => Crypt::encryptString('terapis'),
		]);
		User::create([
			'name' => 'Dokter',
			'username' => 'dokter',
			'level_user' => 'dokter',
			'jenis_nakes' => 'dokter',
			'password' => bcrypt('dokter'),
			'show' => Crypt::encryptString('dokter'),
		]);
		User::create([
			'name' => 'Perawat',
			'username' => 'perawat',
			'level_user' => 'perawat',
			'jenis_nakes' => 'perawat',
			'password' => bcrypt('perawat'),
			'show' => Crypt::encryptString('perawat'),
		]);
	}
}
