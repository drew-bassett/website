<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sora' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="/app.css">
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Miss Baxter</title>
</head>
<body>
<div class="container">
    <div class="left">
        @yield ('content')
    </div>
    <div class="right">
        <a href="/"><button class="button">Home</button></a> <br/>
        <a href="/newcastle"><button class="button">Maths at Newcastle</button></a><br />
        <a href="/york"><button class="button">CompSci at York</button></a><br />
        <a href="/coe"><button class="button">Centre of Excellence</button></a><br />
        <a href="https://www.linkedin.com/in/drew-baxter-3a0a8118a/" target="_blank"><button class="button">LinkedIn</button></a><br />
        <a href="https://github.com/missdrewbaxter" target="_blank"><button class="button">GitHub</button></a><br />
        <a href="https://www.facebook.com/drew.baxter.5209/" target="_blank"><button class="button">Facebook</button></a>
    </div>
</div>
<br/>
</body>
</html>
