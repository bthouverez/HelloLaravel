<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $student = new Student();
        $student->name = 'Noix d\'coco';
        $student->price = 99;
        $student->picture = 'https://raw.githubusercontent.com/bthouverez/SIO1-Trombi-2024/refs/heads/main/MARTIN-ESCOUBES/corentin.jpg';
        $student->description = 'L\'agrafeur des bois';
        $student->save();

        $student = new Student();
        $student->name = 'Juju la frite';
        $student->price = 199;
        $student->picture = 'https://media.licdn.com/dms/image/v2/D4D03AQHPCszfpU5-rA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1727282987935?e=1761177600&v=beta&t=K1vHHyM40D-baYnWu8Oh-q3c11GDnZhq2ESjSAgty9o';
        $student->description = 'Beau gosse, frites et patates';
        $student->save();

        $student = new Student();
        $student->name = 'Flavio la patate';
        $student->price = 260;
        $student->picture = 'https://github.com/bthouverez/SIO1-Trombi-2024/blob/main/MAISSE/photo-Flavio.jpg';
        $student->description = 'Programmeur d\'exception, à sa façon';
        $student->save();




    }
}
