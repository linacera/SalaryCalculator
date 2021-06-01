<?php

namespace App\Models;
use Storage;
use App\Models\Worker;

class Facade
{
    protected $workers;
    function __construct($input){
        $this->workers = $this->generateWorkers($input);
    }

    function explodeWorkers($input){
        $rawWorkers = explode(PHP_EOL, $input);
        return $rawWorkers;
    }

    function generateWorkers($input){
        $rawWorkersData = $this->explodeWorkers($input);
        $workers = [];
        foreach ($rawWorkersData as $workerData) {
            $worker = new Worker($workerData);
            $workers[] = $worker;
        }
       return $workers;
    }

    function getWorkers(){
        return $this->workers;
    }

}