<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\File;
use App\Models\WorkerGenerator;
use App\Http\Requests\SalaryRequest;


class SalaryController extends Controller
{
    //
    function getRawSalary(SalaryRequest $request){
        $file = new File($request->file('salary'));
        $contents = $file->getFileContent();
        $workerGenerator = new WorkerGenerator($contents);
       
       if($workerGenerator->getNumberOfWorkers() >= 5){
        $workers = $workerGenerator->generateWorkers();
        return view('output',['workers'=> $workers]);
       }else{
        return redirect()->back()->withErrors(['workersError'=>'There should be at least five inputs'])->withInput();
       }     

    }
}
