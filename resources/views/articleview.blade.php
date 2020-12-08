<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article View</title>
<link href="/css/app1.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class='container'>
    <div class="row">

    <h1 class='text-center'>Each Article data in one card!! <small>(order by: ID-descending)</small></h1>
    @foreach($data as $i)
    <div class="col-md-4">
        <div class="card well text-center">
            <div class="card-body">
                <h2 class='card-title'>The ID {{$i->id}}</h2>
                <h3 class='card-title'>The title is: {{$i->title}}</h3>
                <p class='card-content'>The status is: {{$i->status}}</p>
                <p class='card-content'>The date is: {{$i->date}}</p>
            </div>
        </div>        
    </div>    
    @endforeach
    </div>
</div>    
</body>
</html>