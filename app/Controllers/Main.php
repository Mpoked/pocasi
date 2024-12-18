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
        $this->station = new station();
        $this->data = new data(); 
    }
    public function index()
    {
        $index = $this->bundesland->findAll();
        $data["bundesland"] = $index; 
        echo view("index", $data); ;
    }

    public function zeme($id){
       $zeme = $this->bundesland->find($id);
       $stanice = $this->station->where('bundesland', $id)->findAll();
       $data["stanice"] = $stanice; //vypíše informace na stanice
       $data["bundesland"] = $zeme; //název země
       echo view("zeme", $data);
    } 

    public function data($id){
        
       $zeme = $this->station->find($id);
        $pocasi_data = $this->data->where("Stations_ID", $id)->findAll();
        $data["zeme"] = $zeme;
        $data["udaje"] = $pocasi_data;
        echo view("data", $data);
    }
}
