<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendee Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{$attendee->attendeeName}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya Sans SC|Abyssinica SIL|Acme|Alef|Alegreya|Alegreya SC|Alegreya Sans">

</head>
<body>
    <div class="body"><br><br><br>
    <h1 class="h1">Edit Attendee</h1>
    <br><br>
    <form action="{{route('attend.update',[$attendee->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="string" name="event_id" value="{{$attendee->event_id}}" hidden required autocomplete="off" class="input">
            <input type="text" name="name" value="{{$attendee->name}}" placeholder="name" required autocomplete="off" class="input">
            <button type="submit" class="btn">Save</button>
        </div> 
    </form>

    <form action="{{route('events.show',[$attendee->event_id])}}">
        <button class="btn">Cancel</button>
    </form>
    </div>
</body>
</html>