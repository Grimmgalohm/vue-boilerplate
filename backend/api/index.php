<?php
header('Content-Type: application/json');
switch($_SERVER['REQUEST_METHOD']){
    case "POST":
        echo "post";
        break;
    case "PUT":
        echo "put";
        break;
    case 'DELETE':
        echo "delete";
        break;
    case 'GET':
        echo "this is a get ";
        break;
}

?>