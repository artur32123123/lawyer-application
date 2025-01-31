<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = new Role();
        $manager->name = 'Content department';
        $manager->slug = 'content-manager';
        $manager->save();
        $developer = new Role();
        $developer->name = 'Sales-Specialist';
        $developer->slug = 'sales-specialist';
        $developer->save();
    }
}
