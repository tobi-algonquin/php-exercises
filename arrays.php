<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
    "Jollof Rice",
    "Eforiro",
    "Grilled Chicken",
    "Zobo"
];

/*
Print every array element in a new line.
*/
echo "<pre>";
print_r($food);
echo "</pre>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul><li>" .$food[0]. "</ul></li>";
echo "<ul><li>" .$food[1]. "</ul></li>";
echo "<ul><li>" .$food[2]. "</ul></li>";
echo "<Ul><li>" .$food[3]. "</ul></li>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "Jollof Rice" => "main course",
    "Eforiro" => "side",
    "Grilled Chicken" => "protein",
    "Zobo" => "drink"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Jollof Rice | ".$food_assoc["Jollof Rice"];
echo "<br>";
echo "Eforiro | ".$food_assoc["Eforiro"];
echo "<br>";
echo "Grilled Chicken | ".$food_assoc["Grilled Chicken"];
echo "<br>";
echo "Zobo | ".$food_assoc["Zobo"];
echo "<br>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$origin = [
    "main course" => "Sierra Leone",
    "side" => "Nigeria",
    "protein" => "Ghana",
    "drink" => "Nigeria"
];

$food_assoc = [
    "Jollof Rice" => $origin,
    "Eforiro" => $origin,
    "Grilled Chicken" => $origin,
    "Zobo" => $origin
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "Jollof Rice | main course". " | " .$food_assoc["Jollof Rice"]["main course"] ;
echo "<br>";
echo "Eforiro | side " . " | " .$food_assoc["Eforiro"]["side"];
echo "<br>";
echo "Grilled Chicken | protein " . " | " .$food_assoc["Grilled Chicken"]["protein"];
echo "<br>";
echo "Zobo | drink ". " | " .$food_assoc["Zobo"]["drink"];
echo "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
$origin = [
    "main course" => "Sierra Leone",
    "side" => "Nigeria",
    "protein" => "Ghana",
    "drink" => "Nigeria"
];

$food_assoc = [
    "Jollof Rice" => $origin,
    "Eforiro" => $origin,
    "Grilled Chicken" => $origin,
    "Zobo" => $origin
];

echo 
"<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>{$food[0]}</td>
    <td>main course</td>
    <td>{$food_assoc['Jollof Rice']['main course']}</td>
  </tr>
  <tr>
    <td>{$food[1]}</td>
    <td>side</td>
    <td>{$food_assoc['Eforiro']['side']}</td>
  </tr>
  <tr>
    <td>{$food[2]}</td>
    <td>protein</td>
    <td>{$food_assoc['Grilled Chicken']['protein']}</td>
  </tr>
  <tr>
    <td>{$food[3]}</td>
    <td>drink</td>
    <td>{$food_assoc['Zobo']['drink']}</td>
  </tr>
</table>";

?>
