<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer1.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="header">

    <h1>Hello, here's my playlist for Aggressively Happy Mood</h1>

</div>


<div id="listarea">
    <ul id="musiclist">


        <?php

        foreach (file('songs\agghappy.txt') as $song){ ?>

            <li class="mp3item">
                <a href="songs\<?=basename($song)?>.mp3"><?= basename($song)?></a>

            </li>
        <?php }?>
        <li><button id="return"><a href="music.php"><strong>Go back</strong></a></button></li>
    </ul>

</div>
</body>
</html>


