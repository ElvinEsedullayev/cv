<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Template Login Page (Bootstrap v3.3)</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{asset('back')}}/css/login.css">
</head>

<body>
    <div class="container">

        <form class="form-signin" action="{{route('login')}}" method="POST">
            @include('back\layouts\partials\errors')
            @csrf
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required aut>
       
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <div class="links">
                <a href="/">&larr; Back to site</a>
            </div>
        </form>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>