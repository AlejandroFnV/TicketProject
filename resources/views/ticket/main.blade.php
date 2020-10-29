<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link href="css/mainStyle.css" media="screen" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="nav">
            <ul>
                <li><a href="{{ url('list') }}">Ticket List</a></li>
                <!--<li><a href="{{ url('detail/2') }}">Detail</a></li>-->
            </ul>
            
        </div>
        
        <div class="container">
            <div class="title">
                <h1>Buy your tickets here!</h1>
            </div>

            <div class="content">
                <h3>Offer of the month!!!</h3>
                <h2>{{ $name }}, only {{ $price }} €!!!</h2>
                
            </div>
            
        </div>
        
        <a href="{{ url('backend') }}">Enter Backend</a>
        
    </body>
</html>