<?php

require_once __DIR__.'/classes/User.php';
require_once __DIR__.'classes/Address.php';
 

 $simona = new User(
    'Simona',
    'Caruso',
    'caruso.simona87@gmail.com',
    'ti ho fregato',
    new Address("Via Del Codice 404 , Milano")
);
//  prendo l'attributo e lo valorizzo con l'assegnazione
 $simona->firstName = 'Simona';
 $simona->lastName = 'Caruso';
 $simona->email = 'caruso.simona87@gmail.com';

 var_dump($simona);

 echo $simona->firstName;

 echo '<hr>';

 $peppe = new User('Peppe',null , null , false);
 $peppe->firstName = 'Peppe';

 var_dump($peppe);

 echo $peppe->firstName;

//  per accedere fuori alla classe statica:
 var_dump(User::$species);

 ?>