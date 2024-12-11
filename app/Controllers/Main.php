<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\bundesland;
use App\Models\data;
use App\Models\station;

class Main extends BaseController
{
    var $bundesland;
    var $data;
    var $station;

    public function __construct() //konstruktor
    {
        $this->bundesland = new bundesland();
    }
    public function index()
    {
        $index = $this->bundesland->findAll(); //$polaci jsou kde to budeme ukladat, this hraci a where se dostavame do databaze a pak si vybereme co vyhledat a všechno
        $data["bundesland"] = $index; //získáme do jednoho atributu všechny údaje (ascending)
        echo view("index", $data); ;
    }
}
