<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya Sans SC|Abyssinica SIL|Acme|Alef|Alegreya|Alegreya SC|Alegreya Sans">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Edit Info</title>
</head>
<body>
    <div class="body"><br><br><br>
    <h1 class="h1">Edit Event Information</h1>
    <br><br>
    <form action="{{route('events.update',[$event->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="eventName" value="{{$event->eventName}}" placeholder="eventName" required autocomplete="off" class="input">
            <input type="date" name="date" value="{{$event->date}}" placeholder="date" required autocomplete="off" class="input">
            <input type="text" name="location" value="{{$event->location}}" placeholder="location" required autocomplete="off" class="input">
            <button type="submit" class="btn">Save</button>
            <button class="btn"><a href="{{route('events.index')}}">Cancel</a></button>
        </div> 
    </form>
    </div>
</body>
</html>