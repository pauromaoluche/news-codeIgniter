<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
                $data = [
            [
                'id'    => 1,
                'title' => 'Elvis sighted',
                'slug'  => 'elvis-sighted',
                'body'  => 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.',
            ],
            [
                'id'    => 2,
                'title' => "Say it isn't so!",
                'slug'  => 'say-it-isnt-so',
                'body'  => 'Scientists conclude that some programmers have a sense of humor.',
            ],
            [
                'id'    => 3,
                'title' => 'Caffeination, Yes!',
                'slug'  => 'caffeination-yes',
                'body'  => 'World\'s largest coffee shop open onsite nested coffee shop for staff only.',
            ],
        ];

        // Inserção múltipla
        $this->db->table('news')->insertBatch($data);
    }
}
