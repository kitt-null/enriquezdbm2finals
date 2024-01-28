<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya Sans SC|Abyssinica SIL|Acme|Alef|Alegreya|Alegreya SC|Alegreya Sans">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="body"><br>
        <h1 class="h1">Events Registration System</h1>
        
        <h4>Event Lists</h4>
        <div class="tbl">
            <table>
                <thead>
                    <tr>
                        <th class="th" id="e">Event Name <br>
                            (click to view attendees)</th>
                        <th class="th">Date</th>
                        <th class="th">Location</th>
                        <th class="th">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $q)
                        <tr>
                            <td class="bef">
                                <a href="{{route('events.show',[$q->id])}}" class="a"><b>{{$q->eventName}}</b></a>
                            </td>
                            <td class="md">{{$q->date}}</td>
                            <td>{{$q->location}}</td>
                            <td class="aft">
                                <b>
                                    <a href="{{route('events.edit',[$q->id])}}" class="a">Edit Event Info</a>
                                    <form action="{{route('events.destroy',[$q->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="a">Delete Event</button>
                                    </form>
                                </b>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">NO DATA</td>
                        </tr>
                    @endforelse    
                </tbody>
            </table>
        </div>
        <div class="bar"></div>
        <form action="{{route('events.store')}}" method="POST"><br>
            @csrf
            <h5>Add New Event</h5>
            <div>
                <input type="text" name="eventName" placeholder="Event Name" required autocomplete="off" class="input">
                <input type="date" name="date" placeholder="Event Date" value="Event Date" required autocomplete="off" class="input">
                <input type="text" name="location" placeholder="Event Location" required autocomplete="off" class="input">
                <button type="submit"><div class="addbtn">Add</div></button>
            </div>
        </form>
    </div>
</body>
</html>