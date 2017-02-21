<!DOCTYPE html>
<html>
<head>
    <title>Due In</title>
    <link rel="stylesheet" href="{{URL::to('styles/landing.css')}}">
</head>
<body>
    <section class="upper">
        <div>
            <div class="links">
                <img class="logo" src="{{URL::to('forms/Logo.png')}}">
            </div>
            <div class="links">
                <h1 class="header-bar">About</h1>
            </div>
            <div class="links">
                <h1 class="header-bar">How It Works</h1>
            </div>
            <div class="links">
                <h1 class="header-bar">Download</h1>
            </div>
            @if(Auth::check())
                <div class="user end">
                    <div class="auth-button">
                        <h1 class="auth"><a href="{{URL::route('user.profile', Auth::user()->username)}}">{{"@".Auth::user()->username}}</a></h1>
                    </div>
                </div>
            @else
                <div class="user end">
                    <div class="auth-button">
                        <h1 class="auth"><a href="{{URL::route('nav.signup')}}">Sign Up</a></h1>
                    </div>
                </div>
                <div class="user">
                    <div class="auth-button">
                        <h1 class="auth"><a href="{{URL::route('nav.signin')}}">Login</a></h1>
                    </div>
                </div>
            @endif
        </div>

        <div class="main-container">
            <img class="tv" src="{{URL::to('images/tv.png')}}">
            <img class="phone" src="{{URL::to('images/phone.png')}}">
            <div class="title">
                <h1 class="main">The future of setting tasks <br> and reminders is here.</h1>
            </div>
            <div class="points">
                <h2 class="reasons">• Create Tasks</h2>
                <h2 class="reasons">• Scan tasks to instantly copy down.</h2>
                <h2 class="reasons">• Get proactive reminders.</h2>
                <h2 class="reasons">• And it's FREE!</h2>
            </div>
            <img class="appstore" src="{{URL::to('images/AppStore.svg')}}">
            <img class="playstore" src="{{URL::to('images/PlayStore.png')}}">
            <p class="soon">Coming Soon</p>
        </div>
    </section>
    <section class="lower">

    </section>
</body>
</html>