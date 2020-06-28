<?php

include 'db_config.php';

//funzione che permette la connessione al database
function connetti_db() {
    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DB_NAME);
    return $conn;
}

?>
