@extends('backend.base')

@section('titleDash')
Create ticket
@endsection

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>create</title>
    </head>
    <body>
        <form action="{{ url('ticket') }}" method="post">
            @csrf <!--seguridad-->
            <input type="text"   name=""      value="#" readonly/>
            <input type="text"   name="name"  value="{{ old('name') }}"/>
            <input type="number" name="price" value="{{ old('price') }}"/>
            <input type="date"   name="date"  value="{{ old('date') }}"/>
            <input type="time"   name="time"  value="{{ old('time') }}"/>
            <input type="submit" value="create"/>
        </form>
    </body>
</html>

@endsection