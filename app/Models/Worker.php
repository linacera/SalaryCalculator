<?php

namespace App\Models;


class Worker
{
    protected $workerName;
    protected $workedHours;

    function __construct($data){
        $this->workerName = $this->explodeWorkerName($data);
    }

    function explodeWorkerName($data){
        $name = explode("=", $data);
        return $name[0];
    }

    function getWorkerName(){
        return $this->workerName;
    }


}