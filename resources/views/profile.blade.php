<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            
            text-align:center;
            padding-top:200px;
        }
        h3{
            text-align:center;
            padding-top:50px;
        }
    </style>
</head>
<body>
    @if(isset($details))
    <h1>Hi {{ $details }}</h1>
    <h3>Successfilly Registered</h3>
    @endif  
</body>
</html>