<?php

namespace Database\Seeders;

use App\Models\Travel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create();

        Travel::factory(20)->create([
            'is_public'  => true,
            'created_by' => $user->id,
        ]);
    }
}
