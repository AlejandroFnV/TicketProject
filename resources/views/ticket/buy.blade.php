<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy</title>
    
    <link href="../css/buyStyle.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="container">
        <h1>You have just bought {{ $name }} ticket!</h1>
        <h2>Thanks for relying on us.</h2>
        <h3>Hope we see you soon.</h3>
        <a href="{{ url('list') }}">Back</a>
    </div>
    
</body>
</html>