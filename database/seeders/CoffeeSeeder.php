<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Enums\Size;
use App\Enums\Heat;

class CoffeeSeeder extends Seeder
{

    public function run(): void
    {
        $data = CoffeeData::getData();

        foreach($data as $coffee) {
            DB::table('coffees')->insert($coffee);
        }
    }
}

final class CoffeeData {
    
    static public array $coffees;

    static public function getData() : array {
        return self::$coffees;
    }
}

CoffeeData::$coffees = [

    // Café Preto
    [
        'name' => 'Café Preto',
        'description' => 'café puro coado',
        'price' => 4.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Café Preto',
        'description' => 'café puro coado',
        'price' => 6.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Café Preto',
        'description' => 'café puro coado',
        'price' => 8.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Espresso
    [
        'name' => 'Espresso',
        'description' => 'café espresso intenso',
        'price' => 5.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Espresso',
        'description' => 'café espresso intenso',
        'price' => 7.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Espresso',
        'description' => 'café espresso intenso',
        'price' => 9.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Cappuccino
    [
        'name' => 'Cappuccino',
        'description' => 'espresso com leite vaporizado e espuma',
        'price' => 8.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Cappuccino',
        'description' => 'espresso com leite vaporizado e espuma',
        'price' => 10.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Cappuccino',
        'description' => 'espresso com leite vaporizado e espuma',
        'price' => 12.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Latte
    [
        'name' => 'Latte',
        'description' => 'espresso com bastante leite vaporizado',
        'price' => 8.50,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Latte',
        'description' => 'espresso com bastante leite vaporizado',
        'price' => 10.50,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Latte',
        'description' => 'espresso com bastante leite vaporizado',
        'price' => 12.50,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Mocha
    [
        'name' => 'Mocha',
        'description' => 'espresso com chocolate e leite',
        'price' => 9.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Mocha',
        'description' => 'espresso com chocolate e leite',
        'price' => 11.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Mocha',
        'description' => 'espresso com chocolate e leite',
        'price' => 13.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Macchiato
    [
        'name' => 'Macchiato',
        'description' => 'espresso com espuma de leite',
        'price' => 7.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Macchiato',
        'description' => 'espresso com espuma de leite',
        'price' => 9.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Macchiato',
        'description' => 'espresso com espuma de leite',
        'price' => 11.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Americano
    [
        'name' => 'Americano',
        'description' => 'espresso diluído em água quente',
        'price' => 5.50,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Americano',
        'description' => 'espresso diluído em água quente',
        'price' => 7.50,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Americano',
        'description' => 'espresso diluído em água quente',
        'price' => 9.50,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Flat White
    [
        'name' => 'Flat White',
        'description' => 'espresso duplo com leite vaporizado',
        'price' => 9.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Flat White',
        'description' => 'espresso duplo com leite vaporizado',
        'price' => 11.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Flat White',
        'description' => 'espresso duplo com leite vaporizado',
        'price' => 13.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::HOT->value,
        'volume_ml' => 450,
    ],

    // Café Gelado
    [
        'name' => 'Café Gelado',
        'description' => 'café coado servido com gelo',
        'price' => 6.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Café Gelado',
        'description' => 'café coado servido com gelo',
        'price' => 8.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Café Gelado',
        'description' => 'café coado servido com gelo',
        'price' => 10.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 450,
    ],

    // Iced Latte
    [
        'name' => 'Iced Latte',
        'description' => 'espresso, leite e gelo',
        'price' => 9.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Iced Latte',
        'description' => 'espresso, leite e gelo',
        'price' => 11.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Iced Latte',
        'description' => 'espresso, leite e gelo',
        'price' => 13.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 450,
    ],

    // Iced Mocha
    [
        'name' => 'Iced Mocha',
        'description' => 'espresso, chocolate, leite e gelo',
        'price' => 10.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Iced Mocha',
        'description' => 'espresso, chocolate, leite e gelo',
        'price' => 12.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Iced Mocha',
        'description' => 'espresso, chocolate, leite e gelo',
        'price' => 14.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 450,
    ],

    // Frappé de Café
    [
        'name' => 'Frappé de Café',
        'description' => 'bebida cremosa de café batida com gelo',
        'price' => 11.00,
        'size' => Size::SMALL->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 150,
    ],
    [
        'name' => 'Frappé de Café',
        'description' => 'bebida cremosa de café batida com gelo',
        'price' => 13.00,
        'size' => Size::MEDIUM->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 300,
    ],
    [
        'name' => 'Frappé de Café',
        'description' => 'bebida cremosa de café batida com gelo',
        'price' => 15.00,
        'size' => Size::LARGE->value,
        'heat' => Heat::ICED->value,
        'volume_ml' => 450,
    ],

];