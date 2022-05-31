<?php
    include ('functions.php');

    if(tambahpost($_POST)>0)
    $id = $_POST['p']+1;

    echo " 
    <script>
    document.location.href = 'post.php?p=$id';
    </script>
    ";
?>