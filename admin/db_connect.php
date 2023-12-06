<?php

function h($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}

function db_connect() {
    $db = new mysqli('localhost', 'root', 'root', 'poppo_php');
        if (!$db) {
            die($db->error);
        }
        
        return $db;
}