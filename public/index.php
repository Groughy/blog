<?php
$action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_URL);
$Hobby=filter_input(INPUT_GET,'Hobby', FILTER_SANITIZE_URL);
$CV=filter_input(INPUT_GET,'CV', FILTER_SANITIZE_URL);
$contact=filter_input(INPUT_GET,'contact', FILTER_SANITIZE_URL);
$success = false;
$routes=array(
    'Hobby.php'=> "Hobby",
    'contact.php'=> "contact",
    'CV.php'=> "CV");
foreach ($routes as $key => $value){
if ($action == $value){
    include "./".$key;
    $success=true;
}
};
if(!$success) {   echo "404 PAS TROUVE, VA AILLEURS !";
}
