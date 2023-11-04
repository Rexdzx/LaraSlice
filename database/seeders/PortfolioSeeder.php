<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'nama'      => 'Siswa',
            'foto'      => ('6kkBThPi-avatar.jpg'),
            'portfolio' => ('O9Gscgyq-robt.jpg'),
            'judul'     => 'Robot',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        Portfolio::create([
            'nama'      => 'Alamak',
            'foto'      => ('4zkkXkq1-guru-pjk.jpg'),
            'portfolio' => ('mFdn1eqj-robot.png'),
            'judul'     => 'Ulakkk',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        Portfolio::create([
            'nama'      => 'Nurdin',
            'foto'      => ('RKYJ3IQK-guru-bing.jpg'),
            'portfolio' => ('uATPyGBB-nord-shards.png'),
            'judul'     => 'Udinn',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
