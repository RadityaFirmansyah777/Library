<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Pemrograman',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Informasi',
            'Teknologi',
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}