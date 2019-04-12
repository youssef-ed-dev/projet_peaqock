<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SINERGHY</title>
</head>
<body>
    <div>
        <div id="top_part" style="margin-top:-8%;">
            <div>
                <h2>Bonjour, Bienvenue chez
                    <img draggable="false" src="http://peaqock.cluster014.ovh.net/wp-content/uploads/revslider/the7-landing-hero-image1/slider-logo-img-tiny.png" alt="Logo image">SINERGHY
                </h2>
            </div>
            <div>
                <nav>
                    <ul>
                        <li>FR</li>
                        <li>EN</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mainContainer">
            <div class="container" >
                <h4 id="myHfour">Je suis ...</h4>
                <div onclick="test(event)"
                    onmouseover="overTheProfile(event)"
                    onmouseleave="leaveTheProfile(event)"
                    class='profile-container profileImg'
                    id="pro-Cont1"></div>

                <h2 id="myHtwo">Partenaire ou futur partenaire</h2>
            </div>
            <div class="container" >
                <h4 id="myHfour">Je suis ...</h4>
                <div onclick="test(event)"
                    onmouseover="overTheProfile(event)"
                    onmouseleave="leaveTheProfile(event)"
                    class='profile-container profileImg'
                    id="pro-Cont2"></div>

                <h2 id="myHtwo">Client Corporate ou prospect</h2>
            </div>
            <div class="container" >
                <h4 id="myHfour">Je suis ... </h4>
                <div onclick="test(event)"
                    onmouseover="overTheProfile(event)"
                    onmouseleave="leaveTheProfile(event)"
                    class='profile-container profileImg'
                    id="pro-Cont3"></div>

                <h2 id="myHtwo">Startup ou startup to be</h2>
            </div>
            <div class="container" >
                <h4 id="myHfour">Je suis ...</h4>
                <div onclick="test(event)"
                    onmouseover="overTheProfile(event)"
                    onmouseleave="leaveTheProfile(event)"
                    class='profile-container profileImg'
                    id="pro-Cont4"></div>
                <h2 id="myHtwo">Un particulier</h2>
            </div>
            <div class="container" >
                <h4 id="myHfour">Je suis ... </h4>
                <div onclick="test(event)"
                    onmouseover="overTheProfile(event)"
                    onmouseleave="leaveTheProfile(event)"
                    class='profile-container profileImg'
                    id="pro-Cont5"></div>
                <h2 id="myHtwo">juste savoir qui vous êtes</h2>
            </div>
        </div>
        <a href="" id="hidden_button"></a>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
