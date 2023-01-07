<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <H1>Add Student</H1>
    <form action="{{route('studentAdd')}}" class="form-group" method= "post">
        <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <div class="call-md-4 form-group">
        <span>
            ID
        </span>
        <input type="text" name="id" value="{{old('id')}}" class="form-controll">
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="call-md-4 form-group">
        <span>
            Name
        </span>
        <input type="text" name="name" value="{{old('name')}}" class="form-controll">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="call-md-4 form-group">
        <span>
            Email
        </span>
        <input type="text" name="email" value="{{old('email')}}" class="form-controll">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="call-md-4 form-group">
        <span>
            Mobile
        </span>
        <input type="text" name="mobile" value="{{old('mobile')}}" class="form-controll">
        @error('mobile')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="call-md-4 form-group">
        <span>
            Username
        </span>
        <input type="text" name="username" value="{{old('username')}}" class="form-controll">
        @error('username')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="call-md-4 form-group">
        <span>
            Password
        </span>
        <input type="text" name="password" value="{{old('password')}}" class="form-controll">
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <input type="submit" class="btn btn-success" value="Add">

    </form>
</body>
</html>