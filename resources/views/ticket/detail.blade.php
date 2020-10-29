<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    
    <link href="../css/detail.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="nav">
        <ul>
            <li><h1>{{ $name }}</h1></li>
        </ul>
        <a id="back" href="{{ url('list') }}">BACK</a>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            
            <tr>
                <td>{{ $id }}</td>
                <td>{{ $name }}</td>
                <td>{{ $price }}</td>
                <td>{{ $date }}</td>
                <td>{{ $time }}</td>
            </tr>

            <!--<a href="{{ url('ticket') }}">Home</a>-->
        </table>

    </div>
        
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
</body>
</html>