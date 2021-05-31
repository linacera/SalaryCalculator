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
            <h1>Welcome to Salary Calculator!!</h1>

            <form action="{{url('/calculateSalary')}}" enctype='multipart/form-data' method="post">
                @csrf
                <div class="row mb-3">
                    <label for="salary">Upload your salary</label>
                    <div class="col-sm-10">
                        <input type='file' name="salary">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
    </body>

</html>