<?php

use App\HazirDiet;
use Illuminate\Database\Seeder;

class HazirDietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HazirDiet::add([
            'type' => 'Definasyon',
            'meal' => 'Kahvaltı',
            'content' => '1 tam yumurta, 7 yumurta beyazı
                45 gr yulaf
                10 adet zeytin
                2 adet kuru erik',
            'time' => '08:00'
        ]);

        HazirDiet::add([
            'type' => 'Definasyon',
            'meal' => 'Öğle',
            'content' => '300 gr kırmızı et/tavuk-hindi
                40 gr esmer pirinç
                1 kaşık zeytinyağ
                2 adet kuru',
            'time' => '12:00'
        ]);

        HazirDiet::add([
            'type' => 'Definasyon',
            'meal' => 'Akşam',
            'content' => '300 gr kırmızı et/tavuk-hindi
                40 gr esmer pirinç
                1 kaşık zeytinyağ
                2 adet kuru',
            'time' => '20:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'Kahvaltı',
            'content' => '1 adet yumurta(haşlanmıs - haftada 3 gün)
                1 dilim peynir (30 gr)
                2 dilim ekmek (tam tahıllı)
                4-5 adet zeytin
                Çay
                Çiğ sebzeler',
            'time' => '08:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'Kuşluk',
            'content' => '3 adet kuru kayısı + 2 adet ceviz',
            'time' => '10:30'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'Öğle',
            'content' => '3-4 köfte kadar et (120 gr et)
                Salata
                1 bardak ayran
                2 dilim ekmek',
            'time' => '13:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'İkindi',
            'content' => '1 kase yoğurt (200 gr) + 1 porsiyon meyve',
            'time' => '16:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'Akşam',
            'content' => '4-6 yemek kaşığı  sebze yemeği
                1 kase çorba
                Salata
                1 dilim ekmek',
            'time' => '19:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Verme',
            'meal' => 'Ara',
            'content' => '1 porsiyon meyve
                1 su bardağı süt',
            'time' => '21:30'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'Kahvaltı',
            'content' => '1-2 dilim peynir(30-60 gr)
			2-3 dilim ekmek
			10-15 adet zeytin
			Bal/pekmez/reçel/tereyağ
			Süt veya meyvesuyu
			',
            'time' => '08:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'Kuşluk',
            'content' => '1 adet kek + 1 bardak süt
			',
            'time' => '10:30'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'Öğle',
            'content' => ' 1 tabak makarna / pilav
			Anayemek(et/sebze/baklagil)
			2 dilim ekmek
			',
            'time' => '13:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'İkindi',
            'content' => ' 1 adet tost veya hamburger + Ayran
			',
            'time' => '16:30'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'Akşam',
            'content' => ' 1 tabak makarna / pilav
			Anayemek(et/sebze/baklagil)
			Yoğurt
			2 dilim ekmek
			',
            'time' => '20:00'
        ]);

        HazirDiet::add([
            'type' => 'Kilo Alma',
            'meal' => 'Ara',
            'content' => ' 1-2 porsiyon meyve veya 1 avuç fındık fıstık ceviz
			',
            'time' => '21:00'
        ]);
    }
}
