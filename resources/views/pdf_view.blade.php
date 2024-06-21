<!DOCTYPE html>
<html>
<head>
    <title>Manual Writing</title>
    <style>
        .mirror-text {
            transform: scaleX(-1) !important;
            -webkit-transform: scaleX(-1);
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -ms-transform: scaleX(-1);
            display: inline-block;
            direction: rtl !important; 
            unicode-bidi: bidi-override; 
        }
    </style>
</head>
<body>
    <h1>Escritura Manual</h1>
    <p class="mirror-text">{{ $braille }}</p>
</body>
</html>
