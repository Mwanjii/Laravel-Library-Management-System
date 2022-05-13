<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminLogin</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    
    <link rel="stylesheet" href="{{ asset('CSS/main.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<body>



<div id="centre" class="container custom-login">
    <div class="row">
    <div class="logo border border-danger">
         <img style="width: 100%; height:200px; " src="{{ asset('images/klms.png') }}" alt="foto"> 
       
    </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{route('login')}}" method="POST" >
                <div class="form-group">
                    @csrf
                    
                </div>
                <div class="form-group">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
               
                <input type="submit" class="btn btn-default" value="Login">
                

    
            </form>
            <hr>
            @error('username')
                <div style="padding-left:70px; " class='alert alert-danger'>{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
</body>
</html>