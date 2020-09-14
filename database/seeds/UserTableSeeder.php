<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{

	public function run()
	{
	    DB::table('users')->delete();
	    for ($i=0; $i < 10; $i++) { 
	    	$name = $this->randomName();
	    	User::create(array(
		        'name'     => $name,
		        'email'    => str_replace(' ', '_', strtolower($name)) . '@scotch.io',
		        'password' => Hash::make('awesome'),
		    ));
	    }
	    
	}

	public function randomName() {
	    $firstname = array(
	        'Johnathon',
	        'Anthony',
	        'Erasmo',
	        'Raleigh',
	        'Nancie',
	        'Tama',
	        'Camellia',
	        'Augustine',
	        'Christeen',
	        'Luz',
	        'Diego',
	        'Lyndia',
	        'Thomas',
	        'Georgianna',
	        'Leigha',
	        'Alejandro',
	        'Marquis',
	        'Joan',
	        'Stephania',
	        'Elroy',
	        'Zonia',
	        'Buffy',
	        'Sharie',
	        'Blythe',
	        'Gaylene',
	        'Elida',
	        'Randy',
	        'Margarete',
	        'Margarett',
	        'Dion',
	        'Tomi',
	        'Arden',
	        'Clora',
	        'Laine',
	        'Becki',
	        'Margherita',
	        'Bong',
	        'Jeanice',
	        'Qiana',
	        'Lawanda',
	        'Rebecka',
	        'Maribel',
	        'Tami',
	        'Yuri',
	        'Michele',
	        'Rubi',
	        'Larisa',
	        'Lloyd',
	        'Tyisha',
	        'Samatha',
	    );

	    $lastname = array(
	        'Mischke',
	        'Serna',
	        'Pingree',
	        'Mcnaught',
	        'Pepper',
	        'Schildgen',
	        'Mongold',
	        'Wrona',
	        'Geddes',
	        'Lanz',
	        'Fetzer',
	        'Schroeder',
	        'Block',
	        'Mayoral',
	        'Fleishman',
	        'Roberie',
	        'Latson',
	        'Lupo',
	        'Motsinger',
	        'Drews',
	        'Coby',
	        'Redner',
	        'Culton',
	        'Howe',
	        'Stoval',
	        'Michaud',
	        'Mote',
	        'Menjivar',
	        'Wiers',
	        'Paris',
	        'Grisby',
	        'Noren',
	        'Damron',
	        'Kazmierczak',
	        'Haslett',
	        'Guillemette',
	        'Buresh',
	        'Center',
	        'Kucera',
	        'Catt',
	        'Badon',
	        'Grumbles',
	        'Antes',
	        'Byron',
	        'Volkman',
	        'Klemp',
	        'Pekar',
	        'Pecora',
	        'Schewe',
	        'Ramage',
	    );

	    $name = $firstname[rand ( 0 , count($firstname) -1)];
	    $name .= ' ';
	    $name .= $lastname[rand ( 0 , count($lastname) -1)];

	    return $name;
	}

}
