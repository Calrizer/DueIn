<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email Verified • Due In</title>
    <link rel="stylesheet" href="{{URL::to('task/css/style.css')}}">
</head>

<body>
<a href="{{URL::route('nav.landing')}}"><img class="logo" src="{{URL::to('forms/Logo.png')}}" href="{{URL::route('nav.landing')}}"/></a>
<div class="container">
    <div class="view">
        <h3>Email Verified!</h3>
        <h4>Your account has been verified, continue to your profile to get started.</h4>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Signing Up">Continue To Profile</button>
    </div>
</div>
</body>
</html>