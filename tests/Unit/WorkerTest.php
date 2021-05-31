<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Worker;
use App\Models\RUles;

class WorkerTest extends TestCase
{
    
     /** @test */
    public function itGetsPersonName(){
        $workedTime = new Worker('Ana=hahaja');
        $this->assertEquals("Ana",$workedTime->getWorkerName());
    }
}
