<?php
    /**
     * Core.php - handles database connection at the start of the page
     * and closes it at the end of the page
     * 
     * @author Danny Kluin
     */
    include_once $_SERVER['DOCUMENT_ROOT'] . '/core/helpers/InputHelper.php';

    function initialise() {
        session_start();
        connectToDatabase();
    }

    function shutdown() {
        session_write_close();
        closeDatabaseConnection();
    }
?>