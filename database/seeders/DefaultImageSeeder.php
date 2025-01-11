<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DefaultImage;

class DefaultImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ['image_path' => 'download3.jpg'], // This will be accessible via storage/download3.jpg
            ['image_path' => 'download2.jpg'],
            ['image_path' => 'download1.jpg'],
        ];

        foreach ($images as $image) {
            DefaultImage::create($image);
        }
    }
}
