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

    <h1>Hello, here's my playlist</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>


<div id="listarea">
    <ul id="musiclist">

        <?php
        $flag=0;
        foreach(glob('songs\*.mp3') as $song){
            $sfilesize=filesize($song);
            if(filesize($song)<1024){
                $sfilesize = filesize($song) . "B";
            }
            elseif(filesize($song)>=1024 && filesize($song)< 1024*1024){
                $sfilesize = round((filesize($song))/1024, 2, PHP_ROUND_HALF_EVEN) . "KB";
            }
            elseif(filesize($song)>=1024*1024 && filesize($song)< 1024*1024*1024){
                $sfilesize = round((filesize($song))/1024/1024, 2, PHP_ROUND_HALF_EVEN) . "MB";
            } ?>

            <li class="mp3item">
                <a href="<?=$song?>"><?= basename($song)?></a>
                <?=$sfilesize?>
            </li>
        <?php } ?>

        <?php

        foreach(glob('songs\*.txt') as $playlist){   ?>

            <li class="playlistitem">
                <a href="<?=basename($playlist, ".txt")?>.php"><?= basename($playlist)?></a>
            </li>

        <?php }  ?>


    </ul>
</div>
</body>
</html>

