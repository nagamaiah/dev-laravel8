<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms</title>
    <style>
        img {
            width : 300px;
            height : 180px
        }
        h3 {
            color: red;
        }
        .org {
            font-size : 30px;
        }
    </style>
</head>
<body>
    <div>
        <h3>
            Terms and Conditions
        </h3> 
        <p>
            Site copyright <span class="org">@laravel</span> From {{$copyright}} to {{date('Y')}} and location: {{$location}}
        </p>
        <p>
            <!-- <img src="{{storage_path('app/public/peg.jpg')}}" alt="not found" />
            <img src="{{Storage::disk('public')->path('peg.jpg')}}" alt="not found" /> -->

            <!-- <img src="{{ public_path('ubuntu.jpg'); }}" alt="not found" /> -->
            <img src="{{asset('ubuntu.jpg')}}" alt="not found" /> <br>

            <!-- /*
                storage_path()
                public_path()
                asset()
                secure_asset()
            */ -->
            
            {{ public_path() }}  <!-- var/www/html/laravel8.8/public -->
            {{ storage_path() }} <!-- var/www/html/laravel8.8/storage  -->
            {{asset('images')}}  <!-- http://dev.laravel8.com/images -->
            <br>
            <img src="{{asset('storage/nature.jpg')}}" alt="not found" />
            <img src="{{asset('storage/images/leaf.jpg')}}" alt="leaf" />
            
        </p>
    </div>
</body>
</html>
<script>
    console.log(window.location.href);
</script>