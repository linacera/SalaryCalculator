<?php

namespace App\Models;


class Calculate
{

    protected $data;
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

    function __construct($data){
        $this->data = $data;
    }


}
