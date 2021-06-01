<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Salary Calculator</title>
      
        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
      
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      </head>
    <body>

        <div class="container">
            <h1>Welcome to Salary Calculator!!</h1>

            <div class="formContainer">
                <form action="{{url('/calculateSalary')}}" enctype='multipart/form-data' method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="salary" class="form-label">Upload salary list:</label>
                        <div class="col-sm-10">
                            <input type='file' name="salary" class="form-control">
                        </div>
                        @if($errors->has('salary'))
                        <p class="error">{{ $errors->first('salary') }}</p>
                        @endif
                    </div>
    
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                    @if($errors->has('workersError'))
                        <p class="error">{{ $errors->first('workersError') }}</p>
                    @endif
                   
                </form>
            </div>
        </div>
    </body>

</html>