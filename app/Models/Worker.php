<?php

namespace App\Models;


class Worker
{
    protected $workerName;
    protected $workedHours;

    function __construct($data){
        $this->workerName = $this->explodeWorkerName($data);
        $this->workedHours = $this->findDailyHours($data);
    }

    function explodeWorkerName($data){
        $name = explode("=", $data);
        return $name[0];
    }

    function getWorkerName(){
        return $this->workerName;
    }


    function findDailyHours($data){
        $simpleDailyHours = $this->extractDailyHours($data);
        $formattedDailyHours = $this->formatDailyHours($simpleDailyHours);
        return($formattedDailyHours);
    }

    function extractDailyHours($data){
        $dailyHours = explode(",", $data);
        $firstElement = explode("=", $dailyHours[0]);
        $dailyHours[0] = $firstElement[1];
        return $dailyHours;
    }

    function formatDailyHours($dailyHours){
        $formattedDailyHours;
        foreach ($dailyHours as $value) {
            $key = substr($value,0,2);
            $values = explode("-",substr($value,2));
            $formattedDailyHours[$key] = $values;
        }
        return $formattedDailyHours;
    }

}