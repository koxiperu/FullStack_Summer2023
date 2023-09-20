<?php
require_once 'exercise2_array.php';
//sort the array
$sorted_celebrities=$celebrities;
ksort($sorted_celebrities);
$richest=0;
//search for a 'richest' person
foreach($sorted_celebrities as $person){
    $bank_balance=$person['credit']-$person['debit'];
    if ($bank_balance>$richest) {
        $richest=$bank_balance;
    }
};
//display all elements of sorted array, and if it#s richest -> display by bold font.
foreach($sorted_celebrities as $person){
    $bank_balance=$person['credit']-$person['debit'];
    if ($bank_balance==$richest) echo '<p><b>' .array_search($person,$sorted_celebrities). ' owns ' .$person['houses']. ' houses and has a bank balance of ' .$richest. '</b> $</p>';
    else echo '<p>' .array_search($person,$sorted_celebrities). ' owns ' .$person['houses']. ' houses and has a bank balance of ' .$bank_balance. ' $</p>';
}
?>