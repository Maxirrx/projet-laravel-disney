<?php

namespace Database\Seeders;

use App\Models\Disney;
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

        User::factory()->create([
            'name' => 'maxou',
            'email' => 'test@example.com',
        ]);

        Disney::create([
            'name' => 'Nemo',
            'price' => '2',
            'description' => 'c est un petit poisson rigolo',
            'image' => "image/Nemo.jpg",
            'datenaissance' => '1989-06-03'
        ]);

        Disney::create([
            'name' => 'Simba',
            'price' => '500',
            'description' => 'Le roi lion courageux',
            'image' => "image/Simba.jpg",
            'datenaissance' => '1994-06-15'
        ]);

        Disney::create([
            'name' => 'Bambi',
            'price' => '300',
            'description' => 'Un petit faon innocent',
            'image' => "image/Bambi.jpg",
            'datenaissance' => '1942-08-21'

        ]);

        Disney::create([
            'name' => 'Dumbo',
            'price' => '400',
            'description' => 'L éléphant aux grandes oreilles',
            'image' => "image/Dumbo.jpg",
            'datenaissance' => '1941-10-23'
        ]);

        Disney::create([
            'name' => 'Timon',
            'price' => '1',
            'description' => 'Le compagnon de Pumba',
            'image' => "image/Timon.jpg",
            'datenaissance' => '1994-06-24'
        ]);

        Disney::create([
            'name' => 'Pumbaa',
            'price' => '200',
            'description' => 'Le compagnon insouciant de Timon',
            'image' => "image/Pumba.jpg",
            'datenaissance' => '1994-06-24'
        ]);

        Disney::create([
            'name' => 'Baloo',
            'price' => '3000',
            'description' => 'Un ours jovial et décontracté',
            'image' => "image/Baloo.jpg",
            'datenaissance' => '1967-10-18'
        ]);

        Disney::create([
            'name' => 'Nala',
            'price' => '4000',
            'description' => 'La lionne forte et indépendante',
            'image' => "image/Nala.jpg",
            'datenaissance' => '1994-06-24'
        ]);

        Disney::create([
            'name' => 'Meeko',
            'price' => '200',
            'description' => 'Le raton laveur espiègle de Pocahontas',
            'image' => "image/Meeko.jpg",
            'datenaissance' => '1995-06-23'
        ]);

        Disney::create([
            'name' => 'Marie',
            'price' => '300',
            'description' => 'La petite chatte des Aristochats',
            'image' => "image/Marie.jpg",
            'datenaissance' => '1970-12-24'
        ]);

        Disney::create([
            'name' => 'Polochon',
            'price' => '25',
            'description' => 'Le meilleur ami d Ariel',
            'image' => "image/Polochon.jpg",
            'datenaissance' => '1989-11-17'
        ]);

        Disney::create([
            'name' => 'Bagheera',
            'price' => '700',
            'description' => 'Le léopard protecteur',
            'image' => 'image/Bagheera.jpg',
            'datenaissance' => '1967-10-18'
        ]);

        Disney::create([
            'name' => 'Stitch',
            'price' => '550',
            'description' => 'L’extraterrestre malicieux',
            'image' => 'image/Stitch.jpg',
            'datenaissance' => '2002-12-26'
        ]);


        Disney::create([
            'name' => 'Mushu',
            'price' => '300',
            'description' => 'Le dragon comique',
            'image' => 'image/Mushu.jpg',
            'datenaissance' => '1998-06-19'
        ]);

        Disney::create([
            'name' => 'Rafiki',
            'price' => '400',
            'description' => 'Le sage mandrill',
            'image' => 'image/Rafiki.jpg',
            'datenaissance' => '1994-06-15'
        ]);

        Disney::create([
            'name' => 'Jaq',
            'price' => '300',
            'description' => 'La souris fidèle de Cendrillon',
            'image' => 'image/Jaq.jpg',
            'datenaissance' => '1950-02-15'
        ]);

        Disney::create([
            'name' => 'Basil',
            'price' => '450',
            'description' => 'Le détective souricier',
            'image' => 'image/Basil.jpg',
            'datenaissance' => '1986-07-02'
        ]);

        Disney::create([
            'name' => 'Oliver',
            'price' => '400',
            'description' => 'Le chaton aventurier',
            'image' => 'image/Oliver.jpg',
            'datenaissance' => '1988-11-18'
        ]);

        Disney::create([
            'name' => 'Figaro',
            'price' => '300',
            'description' => 'Le chat de Geppetto',
            'image' => 'image/Figaro.jpg',
            'datenaissance' => '1940-02-07'
        ]);

        Disney::create([
            'name' => 'Tigrou',
            'price' => '250',
            'description' => 'Le petit kangourou de Winnie l’Ourson',
            'image' => 'image/Tigrou.jpg',
            'datenaissance' => '1977-02-11'
        ]);
    }
}
