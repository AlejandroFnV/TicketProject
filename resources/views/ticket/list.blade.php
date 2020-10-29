<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
    
    <link href="css/listStyle.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="nav">
        <h1>LIST</h1>
        <a id="back" href="{{ url('/') }}">BACK</a>
    </div>
    
    <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Detail</th>
                <th>Shop</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('detail/' . $ticket['id']) }}">detail</a></td>
                    <td><a class="enlaceComprar" data-name="{{ $ticket['name'] }}" data-id="{{ $ticket['id'] }}" href="">Buy</a></td>
                </tr>
            @endforeach
            
            <!--<a href="{{ url('ticket') }}">Home</a>-->
        </table>
        <form id="formBuy" action="{{ url('buy') }}" method="get">
            @csrf
        </form>
        
        
    </div>
    
    <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    
</body>
</html>