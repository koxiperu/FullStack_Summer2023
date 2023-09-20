
<html>
    <form method="post">
        <input type="text" placeholder="title" name="title">
        <select name="genre_id">
            <option value=0>--Select a genre--</option>
            <?php
                require 'GenreTable.php';
                $genreTable = new GenreTable();
                $genres = $genreTable->getAllGenres();
                foreach($genres as $genre)
                {
                    $id = $genre->id;
                    $name = $genre->name;
                    echo "<option value= $id > $name </option>";
                }
            ?>
        </select>
        <select name="artist_id">
            <option value=0>--Select an Artist--</option>
            <?php
                require 'ArtistsTable.php';
                $genreTable = new ArtistsTable();
                $artists = $genreTable->getAllArtists();
                foreach($artists as $artist)
                {
                    $id = $artist->id;
                    $name = $artist->name;
                    echo "<option value= $id > $name </option>";
                }
            ?>
        </select>
        <input type="text" name="release_date" placeholder="yyyy-mm-dd" />
        <input type="submit" name="submit" value="submit"/>
    </form>
</html>


<?php
require_once "SongsTable.php";
$songsTable = new SongsTable();
if (isset($_POST['submit'])) {
    $errors = [];

    //FORM VALIDATION HERE. SEE USERS.
    $songsTable->addSong($_POST);
}
