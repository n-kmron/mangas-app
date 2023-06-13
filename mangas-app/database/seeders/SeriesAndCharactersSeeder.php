<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesAndCharactersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('series')->insert([
            [
                'id' => 1,
                'titre' => 'One Piece',
                'auteur' => 'Eiichiro Oda',
                'nombre_volumes' => 100,
                'date_premiere_parution' => '1997-07-22',
                'couverture' => 'one-piece.jpg',
                'serie_finie' => false,
            ],
            [
                'id' => 2,
                'titre' => 'Naruto',
                'auteur' => 'Masashi Kishimoto',
                'nombre_volumes' => 72,
                'date_premiere_parution' => '1999-09-21',
                'couverture' => 'naruto.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 3,
                'titre' => 'Attack on Titan',
                'auteur' => 'Hajime Isayama',
                'nombre_volumes' => 34,
                'date_premiere_parution' => '2009-09-09',
                'couverture' => 'attack-on-titan.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 4,
                'titre' => 'Death Note',
                'auteur' => 'Tsugumi Ohba',
                'nombre_volumes' => 12,
                'date_premiere_parution' => '2003-12-01',
                'couverture' => 'death-note.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 5,
                'titre' => 'My Hero Academia',
                'auteur' => 'Kōhei Horikoshi',
                'nombre_volumes' => 31,
                'date_premiere_parution' => '2014-07-07',
                'couverture' => 'my-hero-academia.jpg',
                'serie_finie' => false,
            ],
            [
                'id' => 6,
                'titre' => 'Demon Slayer: Kimetsu no Yaiba',
                'auteur' => 'Koyoharu Gotouge',
                'nombre_volumes' => 23,
                'date_premiere_parution' => '2016-02-15',
                'couverture' => 'demon-slayer.jpg',
                'serie_finie' => true,
            ],
        ]);

        // Insertion des données pour les personnages de chaque série
        DB::table('personnages')->insert([
            // Série : One Piece
            [
                'id' => 1,
                'nom' => 'Monkey D. Luffy',
                'serie_id' => 1,
                'type' => 'Shōnen',
                'description' => 'Capitaine de l\'équipage du Chapeau de Paille, utilisateur du Fruit du Caoutchoutier.',
            ],
            [
                'id' => 2,
                'nom' => 'Roronoa Zoro',
                'serie_id' => 1,
                'type' => 'Bushido',
                'description' => 'Épéiste habile et membre de l\'équipage du Chapeau de Paille.',
            ],
            [
                'id' => 3,
                'nom' => 'Nami',
                'serie_id' => 1,
                'type' => 'Femme fatale',
                'description' => 'Navigatrice de l\'équipage du Chapeau de Paille et voleuse talentueuse.',
            ],
            [
                'id' => 4,
                'nom' => 'Tony Tony Chopper',
                'serie_id' => 1,
                'type' => 'Animal transformé',
                'description' => 'Renne ayant mangé le Fruit de l\'Humain, capable de prendre une forme humaine.',
            ],
            // Série : Naruto
            [
                'id' => 5,
                'nom' => 'Naruto Uzumaki',
                'serie_id' => 2,
                'type' => 'Héros énergique',
                'description' => 'Ninja déterminé à devenir le Hokage et porteur du renard à neuf queues.',
            ],
            [
                'id' => 6,
                'nom' => 'Sasuke Uchiha',
                'serie_id' => 2,
                'type' => 'Antihéros',
                'description' => 'Ancien membre du clan Uchiha et rival de Naruto.',
            ],
            [
                'id' => 7,
                'nom' => 'Sakura Haruno',
                'serie_id' => 2,
                'type' => 'Héroïne',
                'description' => 'Ninja médicale et amie d\'enfance de Naruto.',
            ],
            [
                'id' => 8,
                'nom' => 'Kakashi Hatake',
                'serie_id' => 2,
                'type' => 'Sensei mystérieux',
                'description' => 'Ninja expérimenté et sensei de l\'équipe de Naruto.',
            ],
            // Série : Attack on Titan
            [
                'id' => 9,
                'nom' => 'Eren Yeager',
                'serie_id' => 3,
                'type' => 'Héros rebelle',
                'description' => 'Membre du Bataillon d\'exploration, déterminé à éliminer les Titans.',
            ],
            [
                'id' => 10,
                'nom' => 'Mikasa Ackerman',
                'serie_id' => 3,
                'type' => 'Protectrice dévouée',
                'description' => 'Amie proche d\'Eren et combattante d\'élite.',
            ],
            [
                'id' => 11,
                'nom' => 'Armin Arlert',
                'serie_id' => 3,
                'type' => 'Stratège',
                'description' => 'Ami d\'enfance d\'Eren et tacticien intelligent.',
            ],
            [
                'id' => 12,
                'nom' => 'Levi Ackerman',
                'serie_id' => 3,
                'type' => 'Badass',
                'description' => 'Caporal-chef du Bataillon d\'exploration et soldat d\'élite.',
            ],
            // Série : Death Note
            [
                'id' => 13,
                'nom' => 'Light Yagami',
                'serie_id' => 4,
                'type' => 'Antihéros',
                'description' => 'Détenteur du Death Note et connu sous le nom de Kira.',
            ],
            [
                'id' => 14,
                'nom' => 'L',
                'serie_id' => 4,
                'type' => 'Détective génial',
                'description' => 'Détective talentueux et rival de Light.',
            ],
            [
                'id' => 15,
                'nom' => 'Misa Amane',
                'serie_id' => 4,
                'type' => 'Fangirl obsessionnelle',
                'description' => 'Idol japonaise et seconde propriétaire du Death Note.',
            ],
            [
                'id' => 16,
                'nom' => 'Ryuk',
                'serie_id' => 4,
                'type' => 'Shinigami spectateur',
                'description' => 'Shinigami curieux ayant laissé tomber son Death Note dans le monde humain.',
            ],
            // Série : My Hero Academia
            [
                'id' => 17,
                'nom' => 'Izuku Midoriya',
                'serie_id' => 5,
                'type' => 'Héros en devenir',
                'description' => 'Étudiant déterminé à devenir un grand héros.',
            ],
            [
                'id' => 18,
                'nom' => 'Katsuki Bakugo',
                'serie_id' => 5,
                'type' => 'Rival',
                'description' => 'Étudiant arrogant mais talentueux.',
            ],
            [
                'id' => 19,
                'nom' => 'Ochaco Uraraka',
                'serie_id' => 5,
                'type' => 'Fille-next-door',
                'description' => 'Étudiante avec le pouvoir de manipuler la gravité.',
            ],
            [
                'id' => 20,
                'nom' => 'Shoto Todoroki',
                'serie_id' => 5,
                'type' => 'Anti-héros',
                'description' => 'Étudiant doté de pouvoirs de glace et de feu.',
            ],
            // Série : Demon Slayer: Kimetsu no Yaiba
            [
                'id' => 21,
                'nom' => 'Tanjiro Kamado',
                'serie_id' => 6,
                'type' => 'Héros compatissant',
                'description' => 'Pourfendeur de démons déterminé à sauver sa sœur.',
            ],
            [
                'id' => 22,
                'nom' => 'Nezuko Kamado',
                'serie_id' => 6,
                'type' => 'Démon bienveillant',
                'description' => 'Sœur de Tanjiro, transformée en démon mais gardant son humanité.',
            ],
            [
                'id' => 23,
                'nom' => 'Zenitsu Agatsuma',
                'serie_id' => 6,
                'type' => 'Craintif puissant',
                'description' => 'Pourfendeur de démons avec une personnalité peureuse mais des compétences surprenantes.',
            ],
            [
                'id' => 24,
                'nom' => 'Inosuke Hashibira',
                'serie_id' => 6,
                'type' => 'Sauvage',
                'description' => 'Pourfendeur de démons aux instincts animaux.',
            ],
        ]);
    }
}
