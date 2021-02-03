<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mol', function () {
	//$Staff = array('', );
  //return view('mol',[""=>]);
	return view('mol');
});

Route::get('Index', function () {
    return view('Home');
});

Route::get('OurStaff', function () {
$Staff = array(
	0 => [
		'Emp_name' =>"Hamzaeh Allawi",
		'Emp_img' =>"",
		'Age' => 33,
		'Github' =>"https://github.com/hamzeh"
	],
	1 =>[
		'Emp_name'=>"Faten AlMasri",
		'Emp_img'=>"",
		'Age'=>35,
		'Github'=>"https://github.com/Faten"
	],
    2 =>[
    	'Emp_name'=>"Reema Abdullah",
    	'Emp_img'=>"",
    	'Age'=>35,
    	'Github'=>"https://github.com/Reema"
    ]
);
  return view('OurStaff',["Staff"=>$Staff]);
	
});

Route::get('Contact Us', function () {
    return view('ContactUs');
});
