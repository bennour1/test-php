<?php 
$personText = file_get_contents(ROOT_PATH . "/data/persons.json");
$personData = json_decode($personText, true);


$title = "liste des personnes";
$viewName = "personList";

require VIEW_PATH . "/gabarit.php";

 



