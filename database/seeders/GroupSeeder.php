<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    public function run()
    {
        Group::create(['name' => 'beginner']);
        Group::create(['name' => 'intermediate']);
        Group::create(['name' => 'advanced']);
    }
}