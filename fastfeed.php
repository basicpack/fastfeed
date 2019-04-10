<?php
//Criado por Anderson Ismael
//10 de abril de 2019

require_once ROOT.'vendor/autoload.php';

use FastFeed\Factory;

function fasteed(){
    return Factory::create();
}
