<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
       <div class="flex justify-center item-center">
        <form action="{{route('subscribe') }}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                 <input type="text", name="name", id="name">
            </div>
            <div>
                <label for="subscribe">Subscribe</label>
                 <input type="email", name="email", id="subscribe">
            </div>

                <button class="p-4" type="submit" >Subscribe</button>

            </form>    
        </div>
    </body>
</html>
