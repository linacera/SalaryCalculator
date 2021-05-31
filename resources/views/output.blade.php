<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Salary Calculator</title>
      
        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
      
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
      </head>
    <body>

        <div class="container">
            <h1>This are the results!!</h1>

            @foreach ($workers as $worker)
                <p>The amount to pay {{$worker->getWorkerName()}} is {{$worker->getSalary()}}</p>
            @endforeach
            
            
        </div>
    </body>

</html>