<?php




if(isset($_GET["password"])){
    $ss =  password_hash($_GET["password"],PASSWORD_DEFAULT);
    echo $ss;
}

?>