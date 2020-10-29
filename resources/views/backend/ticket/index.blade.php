@extends('backend.base')

@section('titleDash')
Ticket List
@endsection

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <style type="text/css">
            table th, td {
                padding: 5px;
            }
        </style>
        
    </head>
    <body>
        <!--<h1>index</h1>-->
        @if(isset($origen))
            <h2>El valor es: {{ $origen }}</h2>
        @endif
        @if(Session::get('op') !== null)
            <h2>
                Resultado de la operación:
                {{ Session::get('op') }}
                {{ Session::get('result') }}
                {{ Session::get('id') }}
            </h2>
        @endif
        <table border="1">
            <tr>
                <th>id #</th>
                <th>name</th>
                <th>price</th>
                <th>show</th>
                <th>edit</th>
                <th>delete antiguo</th>
                <th>delete</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['id'] }}</td>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('ticket/' . $ticket['id']) }}">show</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/delete') }}">delete</a></td>
                    <td><a data-name="{{ $ticket['name'] }}" data-id="{{ $ticket['id'] }}" class="enlaceBorrar" href="#">delete javascript</a></td>
                </tr>
            @endforeach
        </table>
        <form id="formDelete" action="{{ url('ticket') }}" method="post">
            @method('delete')
            @csrf
        </form>
        <!--<a href="{{ url('ticket/create') }}">create</a>-->

        <!--<a href="{{ url('/') }}">Enter Frontend</a> <!-- php artisan r:l -->
        <!--<a href="{{ route('main') }}">main: name</a>-->
        <!--<a href="{{ action([App\Http\Controllers\TicketController::class, 'main']) }}">main: action</a>-->
        
        <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
    </body>
</html>

@endsection