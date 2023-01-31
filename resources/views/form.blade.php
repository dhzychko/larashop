<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="main">
        {{-- @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif --}}


        <h2>Form Validation</h2>

        <form name="employee" id="employee" method="post" action="{{url('store-form')}}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
                @error('name')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
                @error('email')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" class="@error('age') is-invalid @enderror form-control">
                @error('age')
                <div class="alert">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Submit</button>
        </form>
     
    </div> 

</body>
</html>