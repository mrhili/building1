<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    factory(App\Area::class, 100)->create();

    App\Area::getQuery()->delete();
        //
DB::table('areas')->insert(['id' => 20, 'parent_id' => 0, 'name' => 'new', 'slug' => 'new']);

DB::table('areas')->insert(['id' => 1, 'parent_id' => 0, 'name' => 'Ville de Casablanca-Settat', 'slug' => 'ville-de-casablanca-settat']);

    DB::table('areas')->insert(['parent_id' => 1, 'name' => 'Aïn Harrouda', 'slug' => 'ain-harrouda']);
    DB::table('areas')->insert(['parent_id' => 1, 'name' => 'Bni Yakhlef', 'slug' => 'bni-yakhlef']);
    DB::table('areas')->insert(['parent_id' => 1, 'name' => 'Bouskoura', 'slug' => 'bouskoura']);
    DB::table('areas')->insert(['parent_id' => 1, 'name' => 'Nouaceur', 'slug' => 'nouaceur']);

    DB::table('areas')->insert(['id' => 15, 'parent_id' => 1, 'name' => 'Ville de Casablanca', 'slug' => 'ville-de-casablanca']);



        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Aérodrome de Casablanca Tit Mellil', 'slug' => 'aerodrome-de-casablanca-tit-mellil']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Aéroport de Casablanca-Anfa', 'slug' => 'aeroport-de-casablanca-anfa']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Affaire des satanistes rockers de Casablanca', 'slug' => 'affaire-des-satanistes-rockers-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'AnfaPlace', 'slug' => 'anfaplace']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Centre d\'expression et théâtre La Baraque', 'slug' => 'centre-dexpression-et-theatre-la-baraque']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Bibliothèque universitaire Mohamed Sekkat', 'slug' => 'bibliotheque-universitaire-mohamed-sekkat']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Casa Fashion Show', 'slug' => 'casa-fashion-show']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Casablanca Finance City', 'slug' => 'casablanca-finance-city']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'École centrale Casablanca', 'slug' => 'ecole-centrale-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Cathédrale Notre-Dame-de-Lourdes de Casablanca', 'slug' => 'cathedrale-notre-dame-de-lourdes-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Église du Sacré-Cœur de Casablanca', 'slug' => 'eglise-du-sacre-coeur-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Festival de Casablanca', 'slug' => 'festival-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Festival du Boulevard des jeunes musiciens', 'slug' => 'festival-du-boulevard-des-jeunes-musiciens']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Jazzablanca', 'slug' => 'jazzablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'La Casablancaise', 'slug' => 'la-casablancaise']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Méchouar de Casablanca', 'slug' => 'mechouar-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Morocco Mall', 'slug' => 'morocco-mall']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Mosquée Hassan II', 'slug' => 'mosquee-hassan-ii']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Musée Abderrahman Slaoui', 'slug' => 'musee-abderrahman-slaoui']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Musée du Judaïsme marocain', 'slug' => 'musee-du-judaismeain']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Musée marocain des valeurs mobilières', 'slug' => 'museeain-des-valeurs-mobilieres']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Nouasseur Air Base', 'slug' => 'nouasseur-air-base']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Office des foires et expositions de Casablanca', 'slug' => 'office-des-foires-et-expositions-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Oulad Ziane', 'slug' => 'oulad-ziane']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Palais Al Bachaouia', 'slug' => 'palais-al-bachaouia']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Modèle:Palette Effectif actuel du Raja de Casablanca', 'slug' => 'modelepalette-effectif-actuel-du-raja-de-casablanca']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Préfecture d\'Aïn Chock', 'slug' => 'prefecture-dain-chock']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Préfecture d\'Aïn Sebaâ-Hay Mohammadi', 'slug' => 'prefecture-dain-sebaa-hay-mohammadi']);
        DB::table('areas')->insert(['parent_id' => 15, 'name' => 'Préfecture de Casablanca-Anfa', 'slug' => 'prefecture-de-casablanca-anfa']);


    DB::table('areas')->insert(['parent_id' => 1, 'name' => 'Ville de Mohammédia‎', 'slug' => 'ville-de-mohammedia‎']);

DB::table('areas')->insert(['id' => 2, 'parent_id' => 0, 'name' => 'Ville de Chaouia-Ouardigha', 'slug' => 'ville-de-chaouia-ouardigha']);




    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Khouribga', 'slug' => 'khouribga']);

    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Ben Ahmed', 'slug' => 'ben-ahmed']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Benslimane', 'slug' => 'benslimane']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Berrechid', 'slug' => 'berrechid']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Boujniba', 'slug' => 'boujniba']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Boulanouare', 'slug' => 'boulanouare']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Bouznika', 'slug' => 'bouznika']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Guisser', 'slug' => 'guisser']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Hattane', 'slug' => 'hattane']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Loulad', 'slug' => 'loulad']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oued Zem', 'slug' => 'oued-zem']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oulad Abbou', 'slug' => 'oulad-abbou']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oulad H\'Riz Sahel', 'slug' => 'oulad-hriz-sahel']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oulad M\'rah', 'slug' => 'oulad-mrah']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oulad Saïd', 'slug' => 'oulad-said']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Oulad Sidi Ben Daoud', 'slug' => 'oulad-sidi-ben-daoud']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Ras El Aïn', 'slug' => 'ras-el-ain']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Settat', 'slug' => 'settat']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Sidi Hajjaj', 'slug' => 'sidi-hajjaj']);
    DB::table('areas')->insert(['parent_id' => 2, 'name' => 'Sidi Rahhal Chataï', 'slug' => 'sidi-rahhal-chatai']);






DB::table('areas')->insert(['id' => 3, 'parent_id' => 0, 'name' => 'Ville de Doukkala-Abda', 'slug' => 'ville-de-doukkala-abda']);


    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Azemmour', 'slug' => 'azemmour']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Bir Jdid', 'slug' => 'bir-jdid']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Bouguedra', 'slug' => 'bouguedra']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Hrara', 'slug' => 'hrara']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Jamâat Shaim', 'slug' => 'jamaat-shaim']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Khemis Zemamra', 'slug' => 'khemis-zemamra']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Laakarta', 'slug' => 'laakarta']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Laâounate', 'slug' => 'laaounate']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Oualidia', 'slug' => 'oualidia']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Oulad Amrane', 'slug' => 'oulad-amrane']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Oulad Frej', 'slug' => 'oulad-frej']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Oulad Ghadbane', 'slug' => 'oulad-ghadbane']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Ras El Ain (province de Safi)', 'slug' => 'ras-el-ain-province-de-safi']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Safi ', 'slug' => 'safi']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sebt El Maârif', 'slug' => 'sebt-el-maarif']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sebt Gzoula', 'slug' => 'sebt-gzoula']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sidi Ahmed ', 'slug' => 'sidi-ahmed']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sidi Ali Ben Hamdouche', 'slug' => 'sidi-ali-ben-hamdouche']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sidi Bennour ', 'slug' => 'sidi-bennour']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sidi Bouzid ', 'slug' => 'sidi-bouzid']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Sidi Smaïl', 'slug' => 'sidi-smail']);
    DB::table('areas')->insert(['parent_id' => 3, 'name' => 'Youssoufia ', 'slug' => 'youssoufia']);



DB::table('areas')->insert(['id' => 4, 'parent_id' => 0, 'name' => 'Ville de Fès-Boulemane', 'slug' => 'ville-de-fes-boulemane']);

    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Aderj', 'slug' => 'aderj']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Aïn Cheggag', 'slug' => 'ain-cheggag']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Bhalil', 'slug' => 'bhalil']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Boulemane', 'slug' => 'boulemane']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Guigou', 'slug' => 'guigou']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Missour', 'slug' => 'missour']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Moulay Yaâcoub', 'slug' => 'moulay-yaacoub']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Ouled Tayeb', 'slug' => 'ouled-tayeb']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Outat El Haj', 'slug' => 'outat-el-haj']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Ribate El Kheir', 'slug' => 'ribate-el-kheir']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Séfrou', 'slug' => 'sefrou']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Sidi Youssef Ben Ahmed', 'slug' => 'sidi-youssef-ben-ahmed']);
    DB::table('areas')->insert(['parent_id' => 4, 'name' => 'Skhinate', 'slug' => 'skhinate']);


DB::table('areas')->insert(['id' => 5, 'parent_id' => 0, 'name' => 'Ville de Gharb-Chrarda-Beni Hssen', 'slug' => 'ville-de-gharb-chrarda-beni-hssen']);

    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Aïn Dorij', 'slug' => 'ain-dorij']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Had Kourt', 'slug' => 'had-kourt']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Jorf El Melha', 'slug' => 'jorf-el-melha']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Khenichet (ville)', 'slug' => 'khenichet-ville']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Mechra Bel Ksiri', 'slug' => 'mechra-bel-ksiri']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Mehdia', 'slug' => 'mehdia']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Moulay Bousselham', 'slug' => 'moulay-bousselham']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Sidi Allal Tazi', 'slug' => 'sidi-allal-tazi']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Sidi Kacem', 'slug' => 'sidi-kacem']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Sidi Slimane', 'slug' => 'sidi-slimane']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Sidi Taïbi', 'slug' => 'sidi-taibi']);
    DB::table('areas')->insert(['parent_id' => 5, 'name' => 'Sidi Yahya El Gharb', 'slug' => 'sidi-yahya-el-gharb']);

DB::table('areas')->insert(['id' => 6, 'parent_id' => 0, 'name' => 'Ville de Guelmim-Es Semara', 'slug' => 'ville-de-guelmim-es-semara']);


    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Akka', 'slug' => 'akka']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Assa (ville)', 'slug' => 'assa-ville']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Bouizakarne', 'slug' => 'bouizakarne']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Fam El Hisn', 'slug' => 'fam-el-hisn']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Foum Zguid', 'slug' => 'foum-zguid']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Guelmim', 'slug' => 'guelmim']);
    DB::table('areas')->insert(['parent_id' => 6, 'name' => 'Zag', 'slug' => 'zag']);




DB::table('areas')->insert(['id' => 7, 'parent_id' => 0, 'name' => 'Ville de Marrakech-Tensift-Al Haouz', 'slug' => 'ville-de-marrakech-tensift-al-haouz']);

    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Essaouira‎', 'slug' => 'essaouira‎']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Marrakech', 'slug' => 'marrakech‎']);


    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Aït Ourir', 'slug' => 'ait-ourir']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Amizmiz', 'slug' => 'amizmiz']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Assahrij', 'slug' => 'assahrij']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Ben Guerir', 'slug' => 'ben-guerir']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Bouchane', 'slug' => 'bouchane']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Chichaoua', 'slug' => 'chichaoua']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Fraïta', 'slug' => 'fraita']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Ghmate (ville)', 'slug' => 'ghmate-ville']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Kattara', 'slug' => 'kattara']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Moulay Brahim (ville)', 'slug' => 'moulay-brahim-ville']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Mzouda', 'slug' => 'mzouda']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Sidi Bou Othmane', 'slug' => 'sidi-bou-othmane']);
    DB::table('areas')->insert(['parent_id' => 7, 'name' => 'Sidi Rahhal', 'slug' => 'sidi-rahhal']);






DB::table('areas')->insert(['id' => 8, 'parent_id' => 0, 'name' => 'Ville de Meknès-Tafilalet', 'slug' => 'ville-de-meknes-tafilalet']);



    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aghbalou', 'slug' => 'aghbalou']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Agouraï', 'slug' => 'agourai']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Jemaa', 'slug' => 'ain-jemaa']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Karma', 'slug' => 'ain-karma']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Leuh', 'slug' => 'ain-leuh']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Ain Taoujdate', 'slug' => 'ain-taoujdate']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aït Boubidmane', 'slug' => 'ait-boubidmane']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aoufous', 'slug' => 'aoufous']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Arfoud', 'slug' => 'arfoud']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Azrou', 'slug' => 'azrou']);




DB::table('areas')->insert(['id' => 9, 'parent_id' => 0, 'name' => 'Ville de l\'Oriental', 'slug' => 'ville-de-loriental']);



    DB::table('areas')->insert(['id' => 16, 'parent_id' => 8, 'name' => 'Meknès', 'slug' => 'meknes']);



        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Aïn Jemaa', 'slug' => 'ain-jemaa']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Aïn Karma', 'slug' => 'ain-karma']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Boufakrane', 'slug' => 'boufakrane']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'M\'haya', 'slug' => 'mhaya']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Moulay Driss Zerhoun', 'slug' => 'moulay-driss-zerhoun']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'N\'zalat Bni Amar', 'slug' => 'nzalat-bni-amar']);





    DB::table('areas')->insert(['id' => 17,'parent_id' => 8, 'name' => 'Khnifra', 'slug' => 'khnifra']);


        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Aguelmous', 'slug' => 'aguelmous']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Ajdir Izayane', 'slug' => 'ajdir-izayane']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'El kbab', 'slug' => 'el-kbab']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Fazaz', 'slug' => 'fazaz']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Kaf n\'sour', 'slug' => 'kaf-nsour']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Krouchen', 'slug' => 'krouchen']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'M\'rirt', 'slug' => 'mrirt']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Moulay Bouazza', 'slug' => 'moulay-bouazza']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Ouaoumana', 'slug' => 'ouaoumana']);
        DB::table('areas')->insert(['parent_id' => 16, 'name' => 'Tighassaline', 'slug' => 'tighassaline']);


    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aghbalou', 'slug' => 'aghbalou']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Agouraï', 'slug' => 'agourai']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Jemaa', 'slug' => 'ain-jemaa']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Karma', 'slug' => 'ain-karma']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aïn Leuh', 'slug' => 'ain-leuh']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Ain Taoujdate', 'slug' => 'ain-taoujdate']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aït Boubidmane', 'slug' => 'ait-boubidmane']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Aoufous', 'slug' => 'aoufous']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Arfoud', 'slug' => 'arfoud']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Azrou', 'slug' => 'azrou']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Boudnib', 'slug' => 'boudnib']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Boufakrane', 'slug' => 'boufakrane']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Boumia', 'slug' => 'boumia']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Gardmit', 'slug' => 'gardmit']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Goulmima', 'slug' => 'goulmima']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Gourrama', 'slug' => 'gourrama']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Had Bouhssoussen', 'slug' => 'had-bouhssoussen']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Haj Kaddour', 'slug' => 'haj-kaddour']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Jorf', 'slug' => 'jorf']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Kehf Nsour', 'slug' => 'kehf-nsour']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Kerrouchen', 'slug' => 'kerrouchen']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'M\'haya', 'slug' => 'mhaya']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Midelt', 'slug' => 'midelt']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Moussaoua', 'slug' => 'moussaoua']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Oued Ifrane', 'slug' => 'oued-ifrane']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Sabaâ Aïyoun', 'slug' => 'sabaa-aiyoun']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Sebt Jahjouh', 'slug' => 'sebt-jahjouh']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Sidi Addi', 'slug' => 'sidi-addi']);
    DB::table('areas')->insert(['parent_id' => 8, 'name' => 'Zaïda', 'slug' => 'zaida']);



DB::table('areas')->insert(['id' => 10, 'parent_id' => 0, 'name' => 'Ville de Rabat Salé Zemmour Zaër', 'slug' => 'ville-de-rabat-sale-zemmour-zaer']);

    DB::table('areas')->insert(['id' => 18, 'parent_id' => 10, 'name' => 'Rabat', 'slug' => 'rabat']);


        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Archidiocèse de Rabat', 'slug' => 'archidiocese-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Autoroute Rabat - Oujda', 'slug' => 'autoroute-rabat-oujda']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Bibliothèque nationale du Royaume du Maroc', 'slug' => 'bibliotheque-nationale-du-royaume-du']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Borj Sirat', 'slug' => 'borj-sirat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Bouregreg', 'slug' => 'bouregreg']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Cathédrale Saint-Pierre de Rabat', 'slug' => 'cathedrale-saint-pierre-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Centre cinématographique marocain', 'slug' => 'centre-cinematographiqueain']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Jazz au Chellah', 'slug' => 'jazz-au-chellah']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Église orthodoxe russe de Rabat', 'slug' => 'eglise-orthodoxe-russe-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Familles anciennes de Rabat', 'slug' => 'familles-anciennes-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Festival Mawazine', 'slug' => 'festival-mawazine']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Jardin botanique de Rabat', 'slug' => 'jardin-botanique-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Jardin zoologique national de Rabat', 'slug' => 'jardin-zoologique-national-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Maroc Telecom HQ', 'slug' => 'maroc-telecom-hq']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Mega Mall', 'slug' => 'mega-mall']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Musée des Oudayas', 'slug' => 'musee-des-oudayas']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Palais royal (Rabat)', 'slug' => 'palais-royal-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Phare de Rabat', 'slug' => 'phare-de-rabat']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Pont Mohammed VI', 'slug' => 'pont-mohammed-vi']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Rbati', 'slug' => 'rbati']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'République du Bouregreg', 'slug' => 'republique-du-bouregreg']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Rue des Consuls', 'slug' => 'rue-des-consuls']);
        DB::table('areas')->insert(['parent_id' => 18, 'name' => 'Sala Colonia', 'slug' => 'sala-colonia']);



    DB::table('areas')->insert(['id' => 19, 'parent_id' => 10, 'name' => 'salé', 'slug' => 'salé']);

        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Arabe salétin', 'slug' => 'arabe-saletin']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Association sportive de Salé', 'slug' => 'association-sportive-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Bab el-Mrissa', 'slug' => 'bab-el-mrissa']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Siège de Salé (1260)', 'slug' => 'siege-de-sale-1260']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Mohamed Ben Ali (architecte)', 'slug' => 'mohamed-ben-ali-architecte']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Bibliothèque Sbihi', 'slug' => 'bibliotheque-sbihi']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Borj Adoumoue', 'slug' => 'borj-adoumoue']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Bouregreg', 'slug' => 'bouregreg']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Cimetière juif de Salé', 'slug' => 'cimetiere-juif-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Familles anciennes de Salé', 'slug' => 'familles-anciennes-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Abdelhaq Fennich', 'slug' => 'abdelhaq-fennich']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Festival Karacena', 'slug' => 'festival-karacena']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Festival Mawazine', 'slug' => 'festival-mawazine']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Grande mosquée de Salé', 'slug' => 'grande-mosquee-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Hanbel', 'slug' => 'hanbel']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Jardins exotiques de Bouknadel', 'slug' => 'jardins-exotiques-de-bouknadel']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Kasbah des Gnaouas', 'slug' => 'kasbah-des-gnaouas']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Maâssal', 'slug' => 'maassal']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Mellah', 'slug' => 'mellah']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Mqila Slaouia', 'slug' => 'mqila-slaouia']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Procession des Cierges de Salé', 'slug' => 'procession-des-cierges-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'République du Bouregreg', 'slug' => 'republique-du-bouregreg']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Sala Colonia', 'slug' => 'sala-colonia']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Corsaires de Salé', 'slug' => 'corsaires-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Souks de Salé', 'slug' => 'souks-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Usine centrale laitière de Salé', 'slug' => 'usine-centrale-laitiere-de-sale']);
        DB::table('areas')->insert(['parent_id' => 19, 'name' => 'Abdelhadi Zniber (décès en 1854)', 'slug' => 'abdelhadi-zniber-deces-en-1854']);



    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Ain El Aouda', 'slug' => 'ain-el-aouda']);

    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Khémisset', 'slug' => 'khemisset']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Oulmès', 'slug' => 'oulmes']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Rommani', 'slug' => 'rommani']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Sala Al Jadida', 'slug' => 'sala-al-jadida']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Sidi Allal El Bahraoui', 'slug' => 'sidi-allal-el-bahraoui']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Sidi Bouknadel', 'slug' => 'sidi-bouknadel']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Skhirat', 'slug' => 'skhirat']);

    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Tamesna (ville)', 'slug' => 'tamesna']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Tiddas', 'slug' => 'tiddas']);
    DB::table('areas')->insert(['parent_id' => 10, 'name' => 'Tiflet', 'slug' => 'tiflet']);




DB::table('areas')->insert(['id' => 11, 'parent_id' => 0, 'name' => 'Ville de Souss-Massa-Drâa', 'slug' => 'ville-de-souss-massa-draa']);

    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Agadir', 'slug' => 'agadir']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Taroudant', 'slug' => 'taroudant']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Agni Izimmer', 'slug' => 'agni-izimmer']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aït Baha', 'slug' => 'ait-baha']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aït Hani', 'slug' => 'ait-hani']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aït Iaâza', 'slug' => 'ait-iaaza']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aït Melloul', 'slug' => 'ait-melloul']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aït Yalla', 'slug' => 'ait-yalla']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Alnif', 'slug' => 'alnif']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Anzi', 'slug' => 'anzi']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aoulouz', 'slug' => 'aoulouz']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Aourir (ville)', 'slug' => 'aourir-ville']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Arazane', 'slug' => 'arazane']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Biougra', 'slug' => 'biougra']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Boumalne-Dadès', 'slug' => 'boumalne-dades']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Harte Lyamine', 'slug' => 'harte-lyamine']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Lakhsas', 'slug' => 'lakhsas']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Lqliâa', 'slug' => 'lqliaa']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Megousse', 'slug' => 'megousse']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Oulad Berhil', 'slug' => 'oulad-berhil']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Oulad Teïma', 'slug' => 'oulad-teima']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Sidi Ifni', 'slug' => 'sidi-ifni']);
    DB::table('areas')->insert(['parent_id' => 11, 'name' => 'Zagora', 'slug' => 'zagora']);

DB::table('areas')->insert(['id' => 12, 'parent_id' => 0, 'name' => 'Ville de Tadla-Azilal', 'slug' => 'ville-de-tadla-azilal']);

    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Afourar', 'slug' => 'afourar']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Azilal', 'slug' => 'azilal']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Beni Ayat', 'slug' => 'beni-ayat']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Béni Mellal', 'slug' => 'beni-mellal']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Bradia', 'slug' => 'bradia']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Bzou', 'slug' => 'bzou']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Foum Jemaâ', 'slug' => 'foum-jemaa']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Ouaouizeght', 'slug' => 'ouaouizeght']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Oulad Ayad', 'slug' => 'oulad-ayad']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Oulad Yaïch', 'slug' => 'oulad-yaich']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Sidi Jaber', 'slug' => 'sidi-jaber']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Souk Sebt Oulad Nemma', 'slug' => 'souk-sebt-oulad-nemma']);
    DB::table('areas')->insert(['parent_id' => 12, 'name' => 'Zaouïat Cheikh', 'slug' => 'zaouiat-cheikh']);



DB::table('areas')->insert(['id' => 13, 'parent_id' => 0, 'name' => 'Ville de Tanger-Tétouan', 'slug' => 'ville-de-tanger-tetouan']);



    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Akchour', 'slug' => 'akchour']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Assilah', 'slug' => 'assilah']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Bab Berred', 'slug' => 'bab-berred']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Bab Taza', 'slug' => 'bab-taza']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Brikcha', 'slug' => 'brikcha']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Chefchaouen', 'slug' => 'chefchaouen']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Fnideq', 'slug' => 'fnideq']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Gueznaia', 'slug' => 'gueznaia']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Jebha', 'slug' => 'jebha']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Karia (Tétouan)', 'slug' => 'karia-tetouan']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Khémis Sahel', 'slug' => 'khemis-sahel']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Ksar El Kébir', 'slug' => 'ksar-el-kebir']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Larache', 'slug' => 'larache']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Martil', 'slug' => 'martil']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Mellousa', 'slug' => 'mellousa']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Mohamed ben Abdallah el-Raisuni', 'slug' => 'mohamed-ben-abdallah-el-raisuni']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Moqrisset', 'slug' => 'moqrisset']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Oued Laou', 'slug' => 'oued-laou']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Oued Rmel', 'slug' => 'oued-rmel']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Ouezzane', 'slug' => 'ouezzane']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Point Cires', 'slug' => 'point-cires']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Sidi Lyamani', 'slug' => 'sidi-lyamani']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Zinat', 'slug' => 'zinat']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Spécial:ArbreCatégorie/Ville de Tanger-Tétouan', 'slug' => 'specialarbrecategorie-ville-de-tanger-tetouan']);
    DB::table('areas')->insert(['parent_id' => 13, 'name' => 'Spécial:Suivi des liens/Catégorie:Ville de Tanger-Tétouan', 'slug' => 'specialsuivi-des-liens-categorieville-de-tanger-tetouan']);




DB::table('areas')->insert(['id' => 14, 'parent_id' => 0, 'name' => 'Ville de Taza-Al Hoceïma-Taounate', 'slug' => 'ville-de-taza-al-hoceima-taounate']);



    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Ajdir (Al Hoceïma)', 'slug' => 'ajdir-al-hoceima']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Aknoul', 'slug' => 'aknoul']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Al Hoceïma', 'slug' => 'al-hoceima']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Beni Bouayach', 'slug' => 'beni-bouayach']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Bni Hadifa', 'slug' => 'bni-hadifa']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Ghafsai', 'slug' => 'ghafsai']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Guercif', 'slug' => 'guercif']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Karia (El Jadida)', 'slug' => 'karia-el-jadida']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Karia Ba Mohamed', 'slug' => 'karia-ba-mohamed']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Oued Amlil', 'slug' => 'oued-amlil']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Oulad Zbaïr', 'slug' => 'oulad-zbair']);
    DB::table('areas')->insert(['parent_id' => 14, 'name' => 'Zerarda', 'slug' => 'zerarda']);


    }
}
