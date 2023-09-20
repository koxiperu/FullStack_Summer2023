<?php

// IF syntax
$a = 5;
//$a = 6;
//$a = -5;

if ($a == 6) {
    echo 'Equal to 6!';
} else if ($a < 0) {
    echo 'Negative number!';
} else {
    echo ' Not equal to 6. Not a negative number.';
}

//if you have only ONE instruction inside IF, you can do this:
if ($a == 6)
    echo 'Equal to 6!';
else if ($a < 0)
    echo 'Negative number!';
else
    echo ' Not equal to 6. Not a negative number.';

// Or that :
if ($a == 6)
    echo 'Equak to 6!';
else
    echo 'Not equal to 6.';

//2. Compare operator
$a = 2;
$b = '2';

//same value 
if ($a == $b) //return true

    //same value & type 
    if ($a === $b) // return false

        //not equal
        if ($a != $b) // return false

            // Not same value OR not same type
            if ($a !== $b) // return true

                // greater / lower than
                if ($a < $b) // lower than
                    if ($a > $b) // greater than
                        if ($a <= $b) // lower or equal than
                            if ($a >= $b) // greater or equal than

                                //3. Logical operator
// AND &&
                                if ($a == 5 && $b == 6)
                                    if ($a == 5 and $b == 6)

                                        //OR ||
                                        if ($a == 5 || $b == 6)
                                            if ($a == 5 or $b == 6)

                                                //4. Ternary IF
                                                echo ($a == 5) ? 'equal' : 'not equal';