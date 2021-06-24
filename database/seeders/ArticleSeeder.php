<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        /* for ($i=0; $i < 20 ; $i++) { 
            DB::table('articles')->insert([
                'title' => $faker->name,
                'content' => $faker->text,
                'publication_date' =>  Carbon::now(),
                'target' => $faker->numberBetween(1,4),
                'theme' => $faker->numberBetween(1,5),
                'key_words' => $faker->text(),
                'association' => $faker->numberBetween(1,9),
                'certified' => $faker->numberBetween(0,1),
                'type' => $faker->numberBetween(0,1),
                'support' => $faker->numberBetween(1,6),
                'read_time' => $faker->numberBetween(1,30),
                'views' => $faker->numberBetween(0,10000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } */

        // CLIMAT
        DB::table('articles')->insert([
            'title' => "Quand la Terre n'était qu'un vaste océan",
            'content' => 'L’analyse des signatures chimiques de morceaux de croûte océanique ancienne suggère que notre planète était dépourvue...',
            'publication_date' =>  date('2021-06-22'),
            'target' => 3,
            'theme' => 1,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 8,
            'url' => "https://www.courrierinternational.com/article/geologie-quand-la-terre-netait-quun-vaste-ocean#:~:text=L'analyse%20des%20signatures%20chimiques,%2C2%20milliards%20d'ann%C3%A9es.",
            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Éoliennes en mer: quel impact sur l’écosystème',
            'content' => 'Il arrive que le chercheur en écologie se trouve face à un paradoxe : ce qui est bon pour la planète, et en particulier..',
            'publication_date' =>  date('2021-06-21'),
            'target' => 2,
            'theme' => 1,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 20,
            'url' => "https://www.lemonde.fr/blog/oceanclimat/2020/04/20/eoliennes-en-mer-quel-impact-sur-lecosysteme/#:~:text=En%20conclusion%2C%20il%20appara%C3%AEt%20que,un%20%C3%A9cosyst%C3%A8me%20de%20substrat%20meuble.",
            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Un tourisme responsable pour préserver l’océan',
            'content' => 'Lors que l’été arrive et que les plus chanceux commencent déjà à préparer leurs bagages,  il est essentiel d’avoir en tête quelques...',
            'publication_date' =>  date('2021-06-O5'),
            'target' => 4,
            'theme' => 1,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 5,
            'url' => "https://www.lemonde.fr/blog/oceanclimat/2018/06/08/un-tourisme-responsable-pour-preserver-locean-et-proteger-le-climat/#:~:text=L'impact%20du%20tourisme%20sur,'acidification%20de%20l'oc%C3%A9an.&text=Mais%2C%20%C2%AB%20un%20oc%C3%A9an%20en%20bonne,garantir%20%C2%AB%20un%20climat%20prot%C3%A9g%C3%A9%20%C2%BB.",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        //BIO
        DB::table('articles')->insert([
            'title' => "La surpêche menace les océans",
            'content' => "Des navires plus grands, des filets plus profonds, des sonars plus efficaces: pour répondre à l'appétit insatiable pour les poissons...",
            'publication_date' =>  date('2021-06-11'),
            'target' => 1,
            'theme' => 2,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 5,
            'views' => $faker->numberBetween(0,10000),
            'url' => "https://www.geo.fr/environnement/la-surpeche-menace-les-oceans-195492",

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Changement climatique et pratiques locales',
            'content' => 'Arrêt Upolu, une des neuf îles de l’État des Samoa, dans l’océan Pacifique. Connu par les amateurs de plongée, ce récif corallien isolé promettait...',
            'publication_date' =>  date('2021-06-09'),
            'target' => 1,
            'theme' => 2,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 11,
            'views' => $faker->numberBetween(0,10000),
            'url' => "https://www.cea.fr/presse/Pages/actualites-communiques/environnement/Changement-climatique-et-pratiques-locales-double-peine-pour-un-recif-corallien-.aspx",

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Enquête sur l’horloge biologique du corai',
            'content' => 'Oren Levy, professeur agrégé à la faculté des sciences de la vie et directeur du laboratoire d’écologie marine moléculaire (LMME) ...',
            'publication_date' =>  date('2021-05-O5'),
            'target' => 2,
            'theme' => 2,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 9,
            'url' => "https://oceans.taraexpeditions.org/m/environnement/ocean-biodiversite/enquete-sur-lhorloge-biologique-du-corail-12/",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //POLUTTION
        DB::table('articles')->insert([
            'title' => "Un camion déversé dans la mer chaque minute",
            'content' => "Sacs plastique, ballons, chaussures, emballages: lorsque les déchets ne sont pas correctement traités, ils atterrissent tôt ou tard dans les océans...",
            'publication_date' =>  date('2021-06-14'),
            'target' => 3,
            'theme' => 3,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 7,
            'url' => "https://voilesetvoiliers.ouest-france.fr/environnement-littoral/pollution/video-un-camion-de-dechets-plastique-deverse-dans-l-ocean-chaque-minute-4aef1d4e-5f7d-11ea-b696-f0da82636ff9",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => "L'océan – un grand cocktail de substances toxiques?",
            'content' => "Engrais, pesticides, produits chimiques: nos océans n'ont pas la vie facile! Ainsi, les engrais utilisés dans les champs représentent un problème de taille sur les littoraux...",
            'publication_date' =>  date('2021-06-09'),
            'target' => 2,
            'theme' => 3,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 3,
            'url' => "http://test-dyb.fr/pollution-de-l-ocean/",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'La pollution chimique menace toute la chaîne alimentaire',
            'content' => 'Le rapport du Réseau international pour l’élimination des polluants constate que les rejets de l’homme impactent l’ensemble de la vie océanique, du plancton aux oiseaux...',
            'publication_date' =>  date('2021-05-O5'),
            'target' => 4,
            'theme' => 3,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 15,
            'url' => "https://www.lemonde.fr/planete/article/2021/04/29/la-pollution-chimique-gagne-l-ensemble-des-oceans_6078512_3244.html",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //PECHE
        DB::table('articles')->insert([
            'title' => "Peut-on encore manger du poisson ?",
            'content' => "Après avoir sombré dans l'excès et trop pêché par ignorance, on aborde la mer de façon durable et responsable. Saisonnalité, origine, stock… cinq règles à suivre pour bien mitonner sans piller.",
            'publication_date' =>  date('2021-05-07'),
            'target' => 1,
            'theme' => 4,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 9,
            'url' => "https://www.franceculture.fr/emissions/les-bonnes-choses/peut-encore-manger-du-bon-poisson",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Le littoral, lieu de confrontation Homme/Océan',
            'content' => 'Inondations, érosion, ensablement... de nombreux risques peuvent affecter les zones littorales et côtières. Explications dans ce deuxième billet du blog "Un océan de découvertes".',
            'publication_date' =>  date('2021-06-09'),
            'target' => 2,
            'theme' => 4,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 14,
            'url' => "https://lejournal.cnrs.fr/nos-blogs/un-ocean-de-decouvertes/le-littoral-lieu-de-confrontation-hommeocean",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Greenpeace UK stoppe la pêche destructrice dans la Manche',
            'content' => 'En 2019, les chalutiers industriels ont passé plus de 3000 heures à ratisser les fonds marins de cette aire marine protégée, au large des côtes britanniques. Face à l’inaction des autorités, il était temps d’agir concrètement pour arrêter ce pillage...',
            'publication_date' =>  date('2021-05-O5'),
            'target' => 1,
            'theme' => 4,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 4,
            'url' => "https://www.greenpeace.fr/greenpeace-uk-stoppe-la-peche-destructrice-dans-la-manche/#:~:text=En%202019%2C%20les%20chalutiers%20industriels,concr%C3%A8tement%20pour%20arr%C3%AAter%20ce%20pillage.",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //ECO
        DB::table('articles')->insert([
            'title' => "les bons réflexes au quotidien pour protéger la mer",
            'content' => "À l'occasion de la journée mondiale des océans, ce mardi 8 juin 2021, France Bleu vous donne quelques conseils pratiques à suivre au quotidien pour protéger cette ressource indispensable à la vie sur terre....",
            'publication_date' =>  date('2021-06-11'),
            'target' => 1,
            'theme' => 5,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 17,
            'url' => "https://www.francebleu.fr/infos/environnement/journee-mondiale-des-oceans-les-bons-reflexes-au-quotidien-pour-proteger-la-mer-1623130404",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Protéger les océans et leur extraordinaire biodiversité',
            'content' => "Protéger assez d'espaces maritimes pour aider les populations de poissons en déclin à se rétablir, restaurer les habitats et lutter contre le changement climatique : pourquoi il est essentiel de protéger 30 % des océans d’ici 2030....",
            'publication_date' =>  date('2021-05-10'),
            'target' => 3,
            'theme' => 5,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 10,
            'url' => "https://www.nationalgeographic.fr/environnement/pourquoi-il-est-crucial-de-proteger-les-oceans-et-leur-extraordinaire-biodiversite#:~:text=L'%C3%A9tude%20r%C3%A9v%C3%A8le%20que%20la,soit%2010%20%25%20des%20prises%20actuelles.",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => 'Les promesses de l’économie bleue',
            'content' => 'Les océans deviennent un thème prometteur d’investissement. En matière d’environnement, ce qui est bon pour la planète l’est aussi pour votre portefeuille. ...',
            'publication_date' =>  date('2021-05-O5'),
            'target' => 4,
            'theme' => 5,
            'key_words' => $faker->text(),
            'association' => $faker->numberBetween(1,9),
            'certified' => $faker->numberBetween(0,1),
            'type' => $faker->numberBetween(0,1),
            'support' => $faker->numberBetween(1,6),
            'read_time' => 4,
            'url' => "https://www.lepoint.fr/argent/les-promesses-de-l-economie-bleue-18-02-2021-2414560_29.php",

            'views' => $faker->numberBetween(0,10000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
