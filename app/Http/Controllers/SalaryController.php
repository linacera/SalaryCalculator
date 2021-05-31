<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\File;
use App\Models\Facade;


class SalaryController extends Controller
{
    //
    function getRawSalary(Request $request){
        $file = new File($request->file('salary'));
        $contents = $file->getFileContent();
        $workers = new Facade($contents);
       // $rawWorkers = explode(PHP_EOL, $contents);

       return view('output',['workers'=> $workers->getWorkers()]);


    }
}
