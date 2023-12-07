<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<div class="container">
    <h1 class="text-center">Laravel Ajax </h1>
    <div class="row mt-5">
        <div class="col-7 offset-3">
           <form>
            <div class="form-group">
                <label for="">Select state</label>
                <select name="state"  class="form-control"> 
                    @foreach($states as $state)
                    <option value="">{{ $state->state_name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="">City Name</label>
                <input type="text" name="city_name" class="form-control">

            </div>

            <button class="btn btn-success">Add city</button>
           </form>
        </div>
    </div>
    <div class="row"></div>
</div>  
</body>
</html>