<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [ 
        'Abbigliamento',
        'Animali',
        'Accessori',
        'Casa',
        'Elettronica',
        'Giocattoli',
        'Giardinaggio',
        'Libri',
        'Motori'
    ];






    public function run(): void
    {
       foreach($this->categories as $category){
        Category::create([
            'name' => $category
        ]);
       }
        
    }
}
