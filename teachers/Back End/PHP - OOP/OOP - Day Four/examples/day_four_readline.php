<?php

/*
    READLINE

    You can read direct user input in php.
    No one ever does this. But you can!

    Can only be used when script is ran in console.
*/

$content = readline('Can you type somthing ?');
echo "You typed : $content";