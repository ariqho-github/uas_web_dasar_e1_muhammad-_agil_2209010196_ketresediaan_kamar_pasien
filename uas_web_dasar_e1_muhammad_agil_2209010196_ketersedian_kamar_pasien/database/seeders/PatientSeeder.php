<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::create(['name' => 'Muhammad agil ariqho', 'date_of_birth' => '2002-03-25', 'address' => 'Jln sei mencirim', 'phone_number' => '082268208086', 'email' => 'agil@gmail.com']);
        Patient::create(['name' => 'tika sabilla', 'date_of_birth' => '2002-11-14', 'address' => 'Jln Sudirman ', 'phone_number' => '082211986078', 'email' => 'tika@yahoo.com']);
    }
}
