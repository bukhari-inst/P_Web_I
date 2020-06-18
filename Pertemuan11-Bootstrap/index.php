<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "home";
}

switch($page){
    case "home";
    include "header.php";
    include "home.php";
    include "footer.php";
break;
}

?>