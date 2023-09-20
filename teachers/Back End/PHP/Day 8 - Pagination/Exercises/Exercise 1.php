<?php
/*
    Exercise 1 : 

    Using the "spotify" database, create a "songs.php" where we retrieve X songs per page.
    With navigation buttons to switch from one page to another.

    Step 1:
        Decide how many elements to display on the page.

    Step 2:
        Check if you have a URI parameter.
        For example : songs.php?page=1
    
     Step 3:
        Thanks to the page number, you can change the query.
        SELECT * FROM songs LIMIT X, songsPerPage

        You just have to figure out the X value.

        --- Links (navigate throught the pages)

     Step 4: 
        Create two links/buttons 'previous' / 'next'.
        Previous : currentpage - 1
        Next : currentpage + 1

     Step 5.:
        Make sure that on the first page, 'previous' is disabled.
        Make sure that on the last page, 'next' is disabled.

        To do that, you have to count how many songs are in the table.
        Divide that number by the number of songs per page.

*/