<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\File;
use App\Models\Worker;


class SalaryController extends Controller
{
    //
    function getRawSalary(Request $request){
        $file = new File($request->file('salary'));
        $contents = $file->getFileContent();
        $worker = new worker($contents);
        return('The amount to pay '.$worker->getWorkerName().' is:'.$worker->findSalary());

    }
}
