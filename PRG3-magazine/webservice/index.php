<?php
//require functions for actions
require_once "includes/actions.php";

//based on the existence of the GET parameter, 1 of the 2 functions will be called
if(!isset($_GET['id'])){
    $data = getDishes();
} else {
    $data = getDishDetails($_GET['id']);
}

//geeft aan de ontvanger aan dat het geen html maar json teruggeven
header("Content-type: application/json");

//geeft artiesten terug aan de ontvanger
echo json_encode($data);
exit;

?>