<?php
    $db = new PDO("mysql:host=localhost;dbname=a0737903_kausbokiy",
    "a0737903_kausbokiy", "Gruppa240304");

    $salary = [];

    if($query = $db->query("SELECT * FROM `teachers` ORDER BY id")) {
        $salary = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
?>