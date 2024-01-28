<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{$event->eventName}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya Sans SC|Abyssinica SIL|Acme|Alef|Alegreya|Alegreya SC|Alegreya Sans">
</head>
<body>
    <div class="body"><br>
        <h1 class="hh1">Event: {{$event->eventName}}</h1>
        <p>Date: {{$event->date}}</p>
        <p>Location: {{$event->location}}</p>
        <button class="btn">
            <a href="{{route('events.index')}}" class="a">Back to Events List</a>
        </button>
        <div class="bar"></div>
        <h4>Attendees List</h4>
        <div class="tbl2">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($attend as $i)
                        <tr>
                            <td class="aft">{{$i->name}}</td>
                            <td class="aft">
                            <a href="{{route('attend.edit',[$i->id])}}" class="a">Edit</a>
                            <form action="{{route('attend.destroy',[$i->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="a"><b>Remove</b></button>
                            </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3">NO DATA</td>
                    @endforelse
                </tbody>
            </table>
        </div><br>
        <div class="bar"></div>
        <form action="{{route('events.storeAttendee')}}" method="POST" class="pt-10">
            @csrf
            <div>
                <h4>Add New Attendee</h4>
                <input type="text" name="name" placeholder="Attendee Name" required autocomplete="off" class="input">
                <input type="integer" id="event_id" name="event_id" value="{{$event->id}}" hidden>
                <button type="submit" class="btn"> Add</button>
            </div>
        </form>
    </div>
</body>
</html>