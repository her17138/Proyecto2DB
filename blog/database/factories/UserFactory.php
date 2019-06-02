<?php

/**
 * increase runtime limit de funcion a 5 minutos para simulacion de datos masiva.
 */
ini_set('max_execution_time', 10000);

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Cliente::class, function(Faker $faker) {
    return [
    'clienteNIT' => $faker->unique()->randomNumber(7),
    'Nombre' => $faker->firstName(),
    'Apellido' => $faker -> lastName(),
    'Telefono' => $faker -> randomNumber(7),
    'Direccion' => $faker -> streetAddress(),
    ];
});

$factory->define(App\Factura::class, function(Faker $faker) {

    $client = App\Cliente::all()->pluck('clienteNIT')->toArray();
    return [
 
    'clienteNIT' => $faker->randomElement($client),
    'direccion' => $faker -> streetAddress(),
    'total' => $faker -> randomNumber(3),
    ];
});

$factory->define(App\Producto::class, function(Faker $faker) {
    return [
    'Nombre' => $faker->randomElement($array = array ('Like a Rolling Stone','Satisfaction','Imagine',"What's Going On",'Respect','Good Vibrations',
    'Johnny B. Goode','Hey Jude','Smells Like Teen Spirit',"What'd I Say (Parts 1 And 2)",'	My Generation','A Change Is Gonna Come','Yesterday',
    "Blowin' in the Wind",'London Calling','I Want to Hold Your Hand','Purple Haze','Maybellene','Hound Dog','Let It Be','Born to Run','Be My Baby',
    'In My Life','People Get Ready','God Only Knows','A Day in the Life','Layla',"(Sittin' On) the Dock of the Bay",'Help!','I Walk the Line',
    'Stairway to Heaven','Sympathy for the Devil','River Deep - Mountain High',"You've Lost That Lovin' Feelin'",'Light My Fire','One',
    'No Woman No Cry','Gimme Shelter',"That'll Be the Day",'Dancing in the Street','The Weight','Waterloo Sunset','Tutti-Frutti','Georgia on My Mind',
    'Heartbreak Hotel','Heroes','Bridge Over Troubled Water','All Along the Watchtower','Hotel California','Tracks of My Tears','The Message',
    'When Doves Cry','Anarchy in the U.K.','When a Man Loves a Woman','Louie Louie','Long Tall Sally','A Whiter Shade of Pale','Billie Jean',
    "The Times They Are A-Changin'","Let's Stay Together","Whole Lotta Shakin' Going On",'Bo Diddley',"For What It's Worth (Stop, Hey What's That Sound)",
    'She Loves You','Sunshine of Your Love','Redemption Song','Jailhouse Rock','Tangled Up in Blue','Crying','Walk on By','California Girls',"Papa's Got a Brand New Bag Part 1",
    'Summertime Blues','Superstition','Whole Lotta Love')),
    
    ];
});


$factory->define(App\Categoria::class, function(Faker $faker) {

    $prodId = App\Producto::all()->pluck('productoid')->toArray();
    return [
        
        'Nombre' => $faker->randomElement($array = array('Rock', 'Pop', 'Metal', 'Classical', 'Reggae', 'Disco', 'Electronic')),
        'productoid' => $faker->randomElement($prodId),
    ];
});


$factory->define(App\Marca::class, function(Faker $faker) {

    $prodId = App\Producto::all()->pluck('productoid')->toArray();
    $categoria = App\Categoria::all()->pluck('categoriaid')->toArray();
    return [
        'categoriaid' => $faker->randomElement($categoria),
        'productoid' => $faker->randomElement($prodId),
        'nombre' => $faker->company(),
        'precio' => $faker->randomFloat(2,1,15),
        'cantidad' => $faker->numberBetween(10,100),
    ];
});

$factory->define(App\LineaFactura::class, function(Faker $faker) {

    $prodId = App\Producto::all()->pluck('productoid')->toArray();
    $marcaId = App\Marca::all()->pluck('marcaid')->toArray();
    $facturaId = App\Factura::all()->pluck('facturaid')->toArray();
    $date = App\Factura::all()->pluck('created_at')->toArray();
    $date2 = App\Factura::all()->pluck('updated_at')->toArray();
    return [
        'productoid' => $faker->randomElement($prodId),
        'marcaid' => $faker->randomElement($marcaId),
        'facturaid' => $faker->randomElement($facturaId),
        'cantidad' => $faker->randomNumber(2),
        'preciounitario' => $faker ->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 20),
        'created_at' => $faker ->randomElement($date),
        'updated_at' => $faker ->randomElement($date2),
    ];
});