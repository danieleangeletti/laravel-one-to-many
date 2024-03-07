<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();

        $all_types = [
            'HTML',
            'CSS',
            'JS',
            'Vue',
            'PHP',
            'MySql',
            'Laravel'
        ];

        foreach ($all_types as $single_type) {
            $single_type = Type::create([
                'title' => $single_type,
                'slug' => Str()->slug($single_type)
            ]);
        }
    }
}
