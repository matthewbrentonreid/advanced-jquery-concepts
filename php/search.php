<?php
$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : '';
$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : '';

$ary = array('first-name' => $firstname, 
             'last-name' => $lastname);

echo json_encode($ary);
?>