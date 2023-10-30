<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel Ajax </title>
</head>
<body>
    <div class="container">
<h1 class="text-center">Laravel Ajax</h1>
<div class="row mt-5">
    <div class="col-6 offset-3">
<form action="">
    <div class="form-group">
        <label for="">Seelect State</label>
        <select name="" id="" class="form-control">
        @foreach($states as $state)
        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">city name</label>
        <input type="text" name="city_name" class="form-control"></div>

    <button class="btn btn-success">Add city</button>

</form>
    </div>
</div>

<div class="row">

</div>
</div>
    </div>
</body>
</html>