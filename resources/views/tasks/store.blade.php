@extends('layouts.app')

@section('content')
<h1>Novi zadatak</h1>
<form method="POST" action="/tasks/store" @csrf>
    @csrf

    <div class="form-group">
        <label for="description">Zadatak</label>
        <input class="form-control" name="description">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Napravi novi zadatak</button>
    </div>
</form>
@endsection

     
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>