<?php
/*
READLINE
You can read direct user input in php. No one ever does this but you can.
Can only be used when script is ran in console - see run_readline.png.
*/
$content = readline('Can you type something?');
echo "You typed: $content";
?>