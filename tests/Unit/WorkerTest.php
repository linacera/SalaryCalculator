<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Worker;
use App\Models\Rules;

class WorkerTest extends TestCase
{
    
     /** @test */
    public function itGetsPersonName(){
        $input = "RENE=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00-21:00";
        $workedTime = new Worker($input);
        $this->assertEquals("RENE",$workedTime->explodeWorkerName($input));
    }

    
    /** @test */
    public function itExtractsDailyHours(){
        $input = "RENE=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00-21:00";
        $output = ["MO10:00-12:00","TU10:00-12:00","TH01:00-03:00","SA14:00-18:00","SU20:00-21:00"];
        $worker = new Worker($input);
        $this->assertSame($output,$worker->extractDailyHours($input));
    }

    /** @test */
    public function itFormatsDates(){
        $input1 = "RENE=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00-21:00";
        $input = ["MO10:00-12:00","TU10:00-12:00","TH01:00-03:00","SA14:00-18:00","SU20:00-21:00"];
        $output = ["MO"=>["10:00","12:00"],"TU"=>["10:00","12:00"],"TH"=>["01:00","03:00"],"SA"=>["14:00","18:00"],"SU"=>["20:00","21:00"]];
        $worker = new Worker($input1);
        $this->assertSame($output,$worker->formatDailyHours($input));
    }

    /** @test */
    public function itFindsAndFormatsHours(){
        $input = "RENE=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00-21:00";
        $output = ["MO"=>["10:00","12:00"],"TU"=>["10:00","12:00"],"TH"=>["01:00","03:00"],"SA"=>["14:00","18:00"],"SU"=>["20:00","21:00"]];
        $worker = new Worker($input);
        $this->assertSame($output,$worker->findDailyHours($input));
    } 
}
