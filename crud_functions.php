<?php

include 'config.php';

function crud_read($table, $collums="*" , $selector="" ){
    global $mysql;
    if($collums=='') $collums="*";
    if ($selector!='') $selector = "WHERE ".$selector;
    $sql = "SELECT $collums FROM `$table` $selector ";
    //echo $sql.'<br/>';
    $sql_result = $mysql -> query($sql);
    $data = [];
    foreach($sql_result as $item){ array_push($data, $item ); }
    return $data;
}


$users = crud_read('users');




echo json_encode($users);

?>