<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
    <title>Terms</title>
</head>
<body>
    <div>
        <h3>
            Terms and Conditions
        </h3> 
        <p>
            Site copyright @laravel From {{$copyright}} to {{date('Y')}} and location: {{$location}}
        </p>
        <p>
            <!-- <img src="{{storage_path('app/public/peg.jpg')}}" alt="not found" />
            <img src="{{Storage::disk('public')->path('peg.jpg')}}" alt="not found" /> -->

            <!-- <img src="{{ public_path('ubuntu.jpg'); }}" alt="not found" /> -->
            <img src="{{ asset('ubuntu.jpg'); }}" alt="not found" />

            <!-- /*
                storage_path()
                public_path()
                asset()
                secure_asset()
            */ -->
            
            {{ public_path(); }}
        </p>
    </div>
</body>
</html>