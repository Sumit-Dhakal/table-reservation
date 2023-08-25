<?php
mysqli_connect("localhost","root","","cherry_bloom");

if(mysqli_connect_error()){
    echo "canot ";
}else{
    echo"connected";
}

?>