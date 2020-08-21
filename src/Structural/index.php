<?php

use designPatterns\Structural\Composite\Playlist;
use designPatterns\Structural\Composite\Song;

require __DIR__ . './../../vendor/autoload.php';

function composite()
{
    $rockPlaylist = new Playlist();
    $rockPlaylist->addSong(new Song('The kill', '30 Seconds to Mars', '/music/30-seconds-to-mars/thekill.mp3'));
    $rockPlaylist->addSong(new Song('Given up', 'Linkin Park', '/music/linkin-park/givenup.mp3'));
    $rockPlaylist->addSong(new Song('Pretty Fly', 'The Offspring', '/music/the-offspring/prettyfly.mp3'));

    echo $rockPlaylist->play() . '<br />';
    echo $rockPlaylist->next() . '<br />';
    echo $rockPlaylist->next() . '<br />';
    echo $rockPlaylist->next() . '<br />';
    echo $rockPlaylist->previous() . '<br />';
    echo $rockPlaylist->previous() . '<br />';
    echo $rockPlaylist->previous() . '<br />';
    echo $rockPlaylist->next() . '<br />';
}

composite();