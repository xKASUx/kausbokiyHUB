<?php
    $db = new PDO("mysql:host=localhost;dbname=a0737903_kausbokiy",
    "a0737903_kausbokiy", "Gruppa240304");

    $isps1322m = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Понедельник' ORDER BY id")) {
        $isps1322m = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

    $isps1322t = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Вторник' ORDER BY id")) {
        $isps1322t = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

    $isps1322w = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Среда' ORDER BY id")) {
        $isps1322w = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

    $isps1322th = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Четверг' ORDER BY id")) {
        $isps1322th = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

    $isps1322f = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Пятница' ORDER BY id")) {
        $isps1322f = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

    $isps1322s = [];

    if($query = $db->query("SELECT * FROM isps1322 WHERE dayofweek = 'Суббота' ORDER BY id")) {
        $isps1322s = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
?>