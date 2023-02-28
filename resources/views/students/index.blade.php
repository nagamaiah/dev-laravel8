<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        .list {
            border-style: ridge;
        }
    </style>
</head>
<body>
    
    <h3>Student Details</h3>
    <div class="container">
        @if($students->count() > 0)
            @foreach($students as $student)
                <ul data-id="{{$student->id}}" class="list">
                    <li>{{$student->name}}</li>
                    <li>{{$student->email}}</li>
                </ul>
            @endforeach
            {{ $students->links() }}
        @else 
            <p> No records found. </p>
        @endif
        
    </div>
</body>
</html>