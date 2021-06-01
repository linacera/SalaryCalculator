<?php

namespace App\Models;
use Storage;
use App\Models\Worker;

class WorkerGenerator
{
    protected $workers;
    protected $numberOfWorkers;
    protected $rawWorkers;
    function __construct($input){
        $this->rawWorkers = $input;
        $this->numberOfWorkers = $this->numberOfWorkers($input);
    }

    function explodeWorkers($input){
        $rawWorkers = explode(PHP_EOL, $input);
        return $rawWorkers;
    }

    function generateWorkers(){
        $rawWorkersData = $this->explodeWorkers($this->rawWorkers);
        $workers = [];
        foreach ($rawWorkersData as $workerData) {
            $worker = new Worker($workerData);
            $workers[] = $worker;
        }
       return $workers;
    }

    function numberOfWorkers($input){
        $rawWorkers = $this->explodeWorkers($input);
        return count($rawWorkers);
    }

    function getWorkers(){
        return $this->workers;
    }
    
    function getNumberOfWorkers(){
        return $this->numberOfWorkers;
    }

}