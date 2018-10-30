<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
	static $i = 0;
	$title = [
		'The Best Wii U Games of 2016',
		'VOTING FOR THE PEOPLE\'S CHOICE BEST WII U GAME OF 2016!',
		'Gears of War film to rise like a Fenix thanksto Universal',
		'Trailer Roundup - October 5, 2016',
		'PlayStation VR: A Hardcore Console Gamer’s Perspective',
	];

    return [
    	'slug' => str_slug($title[$i], '-'),
        'title' => $title[$i++],
        'users_id' => 1,
        'image' => 'sample'.$i.'.jpg',
        'content' => $faker->paragraph(20),
       

    ];

});