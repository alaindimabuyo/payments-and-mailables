<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/contact" method="POST" class="bg-white p-6 rounded shadow-md" style="width: 300px">
        @csrf
        <div class="mb-6">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email">

            @error('email')
                 <div>{{$message}}</div>
            @enderror
        </div>

        <button type="submit">Email Me</button>

        @if (session('message'))
            <div>
                {{session('message')}}
            </div>
        @endif
    </form>
</body>
</html>