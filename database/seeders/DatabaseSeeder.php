<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\contact_siswa;
use App\Models\Project;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123qwe')
            ]);

        Siswa::create([
            'nisn' => '00872892',
            'nama' => 'Farrel Aqeel D',
            'alamat' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'adas@gmail.com',
            'about' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quia nesciunt explicabo quasi expedita nisi delectus qui, et adipisci ex rem, dolor, rerum eum ipsa sapiente sequi natus voluptates obcaecati!'
        ]);
        Siswa::create([
            'nisn' => '0031912',
            'nama' => 'Hilzam Pandi',
            'alamat' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'jandjdnjs@gmail.com',
            'about' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quia nesciunt explicabo quasi expedita nisi delectus qui, et adipisci ex rem, dolor, rerum eum ipsa sapiente sequi natus voluptates obcaecati!'
        ]);

        Project::create([
            'siswa_id' => 1,
            'project_name' => 'Projek Pertama',
            'description' => 'HI :D',
            'date' => now()
        ]);

        Contact::create([
            'type' => 'WhatsApp'
        ]);

        Contact::create([
            'type' => 'Instagram'
        ]);

        Contact_siswa::create([
            'siswa_id' => 1,
            'contact_id' => 1,
            'description' => '08821312312'
        ]);

        Project::create([
            'siswa_id' => 1,
            'project_name' => 'Project ke 2',
            'description' => 'addassdfaf',
            'date' => now()
        ]);
    }
}
