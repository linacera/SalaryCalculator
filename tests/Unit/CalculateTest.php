<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Calculate;

class CalculateTest extends TestCase
{
    
    /** @test */
    public function itReturnsNumberOfHours(){
        $range = ["10:00","12:00"];
        $array = [];
        $calculate = new Calculate($array);
        $this->assertEquals(2,$calculate->getNumberOfHours($range));
    }

        /** @test */
        public function itReturnsUSD(){
        $value = ["20:00","21:00"];
        $array = [];
        $calculate = new Calculate($array);
        $this->assertEquals(25,$calculate->getUsd($value,3,1));
    }

    /** @test */
    public function itCalculatesSalary(){
        // $input = ["MO"=>["10:00","12:00"],"TU"=>["10:00","12:00"],"TH"=>["01:00","03:00"],"SA"=>["14:00","18:00"],"SU"=>["20:00","21:00"]]; //215
        $input = ["MO"=>["10:00","12:00"],"TH"=>["12:00","14:00"],"SU"=>["20:00","21:00"]]; //85
        $calculate = new Calculate($input);
        $this->assertEquals(85,$calculate->calculateSalary());
    }
        /** @test */
        public function itGetsWeek(){
        $input = "MO";
        $array = [];
        $calculate = new Calculate($array);
        $this->assertEquals(0,$calculate->checkForWeekOrWeekend($input));
    }

    /** @test */
    public function itGetsHourRange(){
        $input = ["16:00","18:00"];
        $calculate = new Calculate($input);
        $this->assertEquals(2,$calculate->getHourRange($input));
    }

    /** @test */
    public function itGetsSalaryPerDay(){
        $input = ["10:00","12:00"];
        $calculate = new Calculate($input);
        $this->assertEquals(30,$calculate->calculateSalaryPerDay(0,$input));
    }
}
