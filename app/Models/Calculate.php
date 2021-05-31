<?php

namespace App\Models;


class Calculate
{

    protected $dailyWorkedHours;

    private $hoursRange = [
        1 => ["00:01","09:00"],
        2 => ["09:01","18:00"],
        3 => ["18:01","00:00"]
    ];

    private $usdPerHour = [
        1 => [25,30],
        2 => [15,20],
        3 => [20,25]
    ];

    private $days = [
        "week" => ["MO","TU","WE","TH","FR"],
        "weekend" => ["SA","SU"]
    ];

    private $dayHours = [
        "00:00","01:00","02:00","03:00","04:00",
        "05:00","06:00","07:00","08:00","09:00",
        "10:00","11:00","12:00","13:00","14:00",
        "15:00","16:00","17:00","18:00","19:00",
        "20:00","21:00","22:00","23:00"
    ];

    function __construct($workedHours){
        $this->dailyWorkedHours = $workedHours;
    }

    function calculateSalary(){
        $salary = 0;
        foreach ($this->dailyWorkedHours as $key => $values) {
            $weekOrWeekend = $this->checkForWeekOrWeekend($key);
            $salary= $salary + $this->calculateSalaryPerDay($weekOrWeekend,$values);
        }
        return ($salary);
    }

    function checkForWeekOrWeekend($key){
        if(in_array($key,$this->days["week"])){
            return 0;
        }
        return 1;
    }

    function calculateSalaryPerDay($weekOrWeekend, $values){
        $hourRange = $this->getHourRange($values);
        return $this->getUsd($values,$hourRange,$weekOrWeekend);
    }

    function getHourRange($values){
        $range1 = $values[0] >= $this->hoursRange[1][0] && $values[1] <= $this->hoursRange[1][1];
        $range2 = $values[0] >= $this->hoursRange[2][0] && $values[1] <= $this->hoursRange[2][1];
        $range3 = $values[0] >= $this->hoursRange[3][0];
        if($range1){
            return 1;
        }elseif($range2){
            return 2;
        }elseif ($range3) {
            return 3;
        }

    }

    function getNumberOfHours($value){
        $index1 = array_search($value[0], $this->dayHours);
        $index2 = array_search($value[1], $this->dayHours);
        $hours = $index2 - $index1;
        return($hours);
    }

    function getUsd($value, $range, $weekOrWeekend)
    {
        $numberOfHours = $this->getNumberOfHours($value);
        return $this->usdPerHour[$range][$weekOrWeekend]*$numberOfHours;
    }

}
