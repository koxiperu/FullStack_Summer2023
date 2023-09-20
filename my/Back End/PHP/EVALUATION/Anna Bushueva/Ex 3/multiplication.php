<?php
//If the button pushed... 
if (isset($_POST['calc'])){
    $err=false;
    //make two arrays from strings
    $tab1=explode(', ',trim($_POST['tab1']));
    $tab2=explode(', ',trim($_POST['tab2']));
    foreach($tab1 as $t) {
        if (!ctype_digit($t)) $err=true;
    };
    foreach($tab2 as $t) {
        if (!ctype_digit($t)) $err=true;
    };
    // validate. If everuthing is OK, call the function, get an array as a result (result-array) and form the "result string" from result-array.
    if (count($tab1)!=count($tab2)){
        echo '<p style="color:red">Error. The number of elements in each array must be the same</p>';
    } else if ($err) echo '<p style="color:red">Error. Elements must be numberrrrs or check the format of inputs!</p>';
            else {
                $multiplication_array='';        
                foreach (multiple($tab1,$tab2) as $el) {
                    $multiplication_array.=$el. ', ';
                }
            }
}
//function with two arguments-arrays make an array of multipication of each input's elements.
//Result is an array (result-array).
function multiple($arr1, $arr2){
    for ($i=0;$i<count($arr1);$i++) {
        $res[$i]=$arr1[$i]*$arr2[$i];
    }
    return($res);
 }

?>

<!-- display it in HTML form for make it user-friendly :) -->
<form method="POST">
    <h3>Input two aarays, separated by ", ", as in an example "1, 2, 3"</h3>
    <label for="tab1">Array 1</label>
    <input type="text" name="tab1" id="" value="<?php if (isset($_POST['tab1'])) echo $_POST['tab1']?>"><br>
    <label for="tab2">Array 2</label>
    <input type="text" name="tab2" id="" value="<?php if (isset($_POST['tab2'])) echo $_POST['tab2']?>"><br>
    <input type="submit" name="calc" value="multiply">
</form>
<h3 style="color:green">Multiplication is <?php if (isset($multiplication_array)) echo $multiplication_array?></h3>