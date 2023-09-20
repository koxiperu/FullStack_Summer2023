<?php

/* 

Imagine a world of Superheroes.

Each superhero has:
    > A name
    > Health points (default 100)
    > Power points (default 10)
    > Defense points (default 5)
    > A superhero catchphrase (default "I'll save the day!")
    > There are several types of superheroes: Mutants, Aliens, and Tech Heroes.

-- Step 1 - 20 Minutes :

Create a Superhero class.
This class will implement all attributes and methods common to superheroes.

Set up different types of superheroes. You must be able to create Mutants, Aliens, or Tech Heroes.
Example : 
$mutant = new Superhero('Wolverine', 'Mutant');
$alien = new Superhero('Superman', 'Alien');

-- Step 2 - 10 min :

Aliens have a unique way of speaking.
Their catchphrase is now: "Greetings, Earthlings!"

-- Step 3 - 20 min :

There are several types of superhero gadgets: suit, gauntlets, gadgets (you can add as many as you want).

Each gadget is designated by a name.
Gadgets also give special bonuses.

For example: a suit can give +5 in defense, gauntlets can give +3 in power.
There are even some gadgets that give +10 in power but decrease defense.

Create a Gadget class.
This class will implement all the attributes and methods common to the gadgets.

Set up different gadgets. You must be able to create multiple gadgets.
(I leave you free to your imagination for the creation of gadgets and their specific powers....)
For example :
$spiderSuit = new Gadget("Spider Suit", "Suit", 0, 0, 5); // 0 power bonus, 0 defense bonus, 5 health bonus;
$energyGauntlets = new Gadget("Energy Gauntlets", "Gauntlets", 3, 0, 0); // 3 power bonus, 0 defense bonus, 0 health bonus;
$stealthCape = new Gadget("Stealth Cape", "Gadget", 0, 5, 0); // 0 power bonus, 5 defense bonus, 0 health bonus;

-- Step 4 - 30 min :

A superhero can now hold a gadget.
You have to change the Superhero class and add a new property: $gadget;

For now, the superhero can hold only one gadget at a time.
You can add/remove/display the gadget for a superhero (create a method for each action)

-- Step 5 - BONUS - 30 min :

A superhero can now hold many gadgets.
It's actually an 'inventory' of gadgets.
Change the type of $gadget => It's now an array.

A superhero may have several gadgets but:
- They can only be equipped with 4 gadgets in total.
- They can only wear 2 gauntlets at a time.
- They can only wear one suit.

Change your function to 'add'/'remove'/'display' a gadget.
Now it will add/remove/display to the inventory.

*/
?>
