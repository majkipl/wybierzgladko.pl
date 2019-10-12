<?php

use App\Enums\Product;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = [
            'content' => 'Choć lekkie prasuje dobrze, super długi kabel (w końcu mogę prasować bez przedłużacza), nie kapie, wyrzut pary ok - jak dla mnie super.',
            'product' => Product::PSU
        ];
        $data[] = [
            'content' => 'Żelazko użytkujemy od prawie 2 miesięcy - spisuje się świetnie - rozprasowuje każde zagniecenie bez większego wysiłku, bardzo szybko się nagrzewa, mocny wyrzut pary znacznie przyspiesza prasowanie. Żelazko ma spory pojemnik na wodę, wygodnie się ją nalewa. Dlugi przewód, odpowiednia waga żelazka, ręcę się nie męczą nawet podczas prasowania sterty ubrań, , dobrze radzi sobie ze prasowaniem wokół guzików, dzięki specjalnym wycięciom. Jestem pozytywnie zaskoczona produktem- trudno znaleść opinie na jego temat, stąd zakup był w ciemno, okazał się strzałem w 10! Świetna relacja ceny do jakości.',
            'product' => Product::PSU
        ];
        $data[] = [
            'content' => 'Doskonałe żelazko! Błyskawicznie się nagrzewa, dzięki silnemu uderzeniu pary szybko i łatwo rozprasowuje nawet trudne zagniecenia. Ma też dłuższy niż na ogół kabel, co czasami ułatwia pracę.',
            'product' => Product::PSU
        ];
        $data[] = [
            'content' => 'Mimo lekkiej wagi żelazko prasuje bardzo dobrze różne tkaniny. Jedna temperatura pozwala usprawnić cały proces prasowania. Duży zbiornik na wodę zapobiega odrywaniu się od prasowania ubrań. Ogromny plus za funkcję automatycznego wyłączania się. Jeśli cenisz sobie czas i nienaganny wygląd - to produkt dla Ciebie.',
            'product' => Product::OT
        ];
        $data[] = [
            'content' => 'Jeśli nienawidzisz prasować. Jeśli ta czynność to po prostu konieczny obowiązek do wykonania w domu - to żelazko jest dla Ciebie! Prasujesz każdy materiał przy ustawionej jednej temperaturze, co jest naprawdę wygodne dla osoby, która nigdy nie wie jaką temperaturę wybrać, aby nie spalić koszuli. Ja zawsze miałam z tym problem, czasami prasując lekką, jedwabną bluzeczkę, mimo niskiej temperatury paliła się ;( . Tu nie ma z tym problemu.',
            'product' => Product::OT
        ];
        $data[] = [
            'content' => 'Największym plusem tego żelazka jest oczywiście fakt, że nie ustawiasz temperatury. Zapewne nie raz zastanawiałaś się czy aby nie jest żelazko za gorące i czy nie przypali ulubionej sukienki / bluzki. Fajnie się prasuje, ceramiczna stopa sunie po materiale aż miło. Funkcja samo wyłączenia moje wybawienie :) szczerze polecam, nie jest drogie a świetne.',
            'product' => Product::OT
        ];
        $data[] = [
            'content' => 'Bardzo dobry produkt, wysoka jakość za przystępną cenę. Żelazko proste w obsłudze, duża funkcjonalność, mocne uderzenie pary. Stopa wyprofilowana, co ułatwia prasowanie. Estetyczny design i kolorystyka.',
            'product' => Product::I
        ];
        $data[] = [
            'content' => 'Super polecam przy dzieciach dużo prasowania dodatkowy plus wytrzymuje upadki sprawdzone cieszę się że wybrałam tą firmę.',
            'product' => Product::I
        ];
        $data[] = [
            'content' => 'Parownica świetnie sprawdza się w podróży. Prasowanie bez wyciągania deski do prasowania jest również ogromnym plusem na co dzień. Jeśli nie ma miejsca do powieszenia ubrania i prasowania w pionie, polecam położyć je na łóżku czy fotelu. Fajny produkt, jestem zadowolona z efektów prasowania i odświeżania ubrań.',
            'product' => Product::SG
        ];
        $data[] = [
            'content' => 'Od kilku tygodni korzystam z tego urządzenia i jestem z niego bardzo zadowolona. Świetnie sprawdza się do odświeżenia ubrań w podróży, ale korzystam z niego również w domu. Jest małe i poręczne, dzięki temu można szybko z niego skorzystać. Dzięki dużej mocy dobrze radzi sobie z plisami, fałdkami i tzw. trudnymi powierzchniami - tam gdzie słabo radzi sobie tradycyjne żelazko. Polecam!',
            'product' => Product::SG
        ];
        $data[] = [
            'content' => 'Parownica świetnie sprawdza się w podróży. Prasowanie bez wyciągania deski do prasowania jest również ogromnym plusem na co dzień. Jeśli nie ma miejsca do powieszenia ubrania i prasowania w pionie, polecam położyć je na łóżku czy fotelu. Fajny produkt, jestem zadowolona z efektów prasowania i odświeżania ubrań.',
            'product' => Product::COT
        ];
        $data[] = [
            'content' => 'Od kilku tygodni korzystam z tego urządzenia i jestem z niego bardzo zadowolona. Świetnie sprawdza się do odświeżenia ubrań w podróży, ale korzystam z niego również w domu. Jest małe i poręczne, dzięki temu można szybko z niego skorzystać. Dzięki dużej mocy dobrze radzi sobie z plisami, fałdkami i tzw. trudnymi powierzchniami - tam gdzie słabo radzi sobie tradycyjne żelazko. Polecam!',
            'product' => Product::COT
        ];
        $data[] = [
            'content' => 'Parownica świetnie sprawdza się w podróży. Prasowanie bez wyciągania deski do prasowania jest również ogromnym plusem na co dzień. Jeśli nie ma miejsca do powieszenia ubrania i prasowania w pionie, polecam położyć je na łóżku czy fotelu. Fajny produkt, jestem zadowolona z efektów prasowania i odświeżania ubrań.',
            'product' => Product::CX
        ];
        $data[] = [
            'content' => 'Od kilku tygodni korzystam z tego urządzenia i jestem z niego bardzo zadowolona. Świetnie sprawdza się do odświeżenia ubrań w podróży, ale korzystam z niego również w domu. Jest małe i poręczne, dzięki temu można szybko z niego skorzystać. Dzięki dużej mocy dobrze radzi sobie z plisami, fałdkami i tzw. trudnymi powierzchniami - tam gdzie słabo radzi sobie tradycyjne żelazko. Polecam!',
            'product' => Product::CX
        ];

        Review::insert($data);
    }
}
