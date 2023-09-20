<?php
// EXERCISE
/* You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character 
from a role-play game.
    The character information will be saved in different variables.
    There are 4 information :
    -- The last name
    -- The first name
    -- Attack points
    -- Defense points
You have to display all the different informations about your character on the page.
*/

$firstName = 'Banana';
$lastName = 'Guy';
$atkPoints = 10;
$defPoints = 5;

echo '<h2>' . $firstName . ' ' . $lastName . '</h2>';
echo '<p>Attack points : ' . $atkPoints . '</p>';
echo '<p>Defense points : ' . $defPoints . '</p>';

?>

<!-- Gives the same result as line 20 -->
<h2>
    <?php echo $firstName . ' ' . $lastName ?>
</h2>