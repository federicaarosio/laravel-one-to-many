<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            'project' => [
                    'title' => 'Boolzapp',
                    'author' => 'Federica Arosio',
                    'cover_image' => 'https://picsum.photos/id/104/640/480',
                    'description' => 'Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto',
                    'languages' => 'html, css, js',
                    'creation_date' => '2023-12-12'
                ],
                [
                    'title' => 'Progetto 2',
                    'author' => 'Federica Arosio',
                    'cover_image' => 'https://picsum.photos/id/102/640/480',
                    'description' => 'Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto',
                    'languages' => 'html, css, js',
                    'creation_date' => '2023-12-12'
                ],
                [
                    'title' => 'Progetto 3',
                    'author' => 'Federica Arosio',
                    'cover_image' => 'https://picsum.photos/id/101/640/480',
                    'description' => 'Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto',
                    'languages' => 'html, css, js',
                    'creation_date' => '2023-12-12'
                ],
                [
                    'title' => 'Progetto 4',
                    'author' => 'Federica Arosio',
                    'cover_image' => 'https://picsum.photos/id/106/640/480',
                    'description' => 'Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto Breve descrizione del progetto',
                    'languages' => 'html, css, js',
                    'creation_date' => '2023-12-12'
                ],
        ];
    
        foreach ($projects as $singleProject) {
            $newProject = new Project();
            $newProject->title = $singleProject['title'];
            $newProject->author = $singleProject['author'];
            $newProject->description = $singleProject['description'];
            $newProject->cover_image = $singleProject['cover_image'];
            $newProject->languages = $singleProject['languages'];
            $newProject->creation_date= $singleProject['creation_date'];
            $newProject->save();
        };
    }
}
