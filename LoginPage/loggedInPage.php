<?php
session_start();
if(array_key_exists('id',$_COOKIE)){
    $_COOKIE['id'] = $_COOKIE['id'];

    echo "<h3> Welocome Dear,".$_SESSION['name']."</h3>";
}
if(array_key_exists('id',$_COOKIE) OR array_key_exists('id',$_COOKIE)){
    echo "<h2> Congragulations you are a registered user: <a href =index.php?Log out =1>Log out </a> </h2>";

}
else{
    header("Loaction :index.php");
}

?>

<html>
    <h3><a href ="index.php">Go Back </a></h3>

</html>
