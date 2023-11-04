<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'gambar1'   => ('about1.jpeg'),
            'gambar2'   => ('about2.jpg'),
            'gambar3'   => ('about3.jpg'),
            'deskripsi' => 'Lorem adalah institusi pendidikan terkemuka yang ditempatkan dengan bangga di Kota Medan, Sumatera Utara. Di sini, kami merasa sangat bersyukur karena telah mampu menciptakan generasi penerus yang memiliki potensi luar biasa untuk menjadi pemimpin masa depan.'
        ]);
    }
}
