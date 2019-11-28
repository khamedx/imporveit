<?php
    /**
     * Helper voor databaseverkeer
     * 
     * @author Danny Kluin
     */

    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASSWOORD', '');
    define('DB_DATABASE', '');

    $_databaseConn = null;

    /**
     * Maakt verbinding met de database.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * -
     *
     * Resultaat:
     * -
     * 
     * Versie:
     * @version 1.0
     */
    function connectToDatabase() {
        $_databaseConn = mysqli_connect(constant('DB_HOST'), constant('DB_USER'), constant('DB_PASSWORD'), constant('DB_DATABASE'));
    
        mysqli_set_charset($_databaseConn, 'utf8');
    }

    /**
     * Sluit de verbinding met de database.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * -
     *
     * Resultaat:
     * -
     * 
     * Versie:
     * @version 1.0
     */
    function closeDatabaseConnection() {
        mysqli_close($_databaseConn);
    }

    /**
     * Escapet bepaalde MySQL-karakters. Handig als beschermingsmiddel tegen MySQL-injecties.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param array|string Inputdata om te escapen.
     *
     * Resultaat:
     * @return array|string Vanzelfsprekend
     * 
     * Versie:
     * @version 1.0
     */
    function databaseEscape($input) {
        if (is_array($input)) {
            $result = array();
            
            foreach ($input as $key => $value) { 
                $result[$key] = mysqli_real_escape_string($_databaseConn, $value); 
            }

            return $result;
        } else {
            return mysqli_real_escape_string($_databaseConn, $input);
        }
    }

    /**
     * Voert een query uit op de database.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param string The database query to perform.
     *
     * Resultaat:
     * @return mysqli_result Resultaatset van de query.
     * 
     * Versie:
     * @version 1.0
     */
    function databaseQuery($query) {
        return mysqli_query($_databaseConn, $query);
    }

    /**
     * Haalt het aantal geselecteerde records op a.d.h.v een uitgevoerde databasequery.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param mysqli_result De resultaatset waarvan het aantal geselecteerde records opgehaald dient te worden.
     *
     * Resultaat:
     * @return int Het aantal geselecteerde records.
     * 
     * Versie:
     * @version 1.0
     */
    function databaseNumRows($queryResult) {
        return mysqli_num_rows($_databaseConn, $queryResult);
    }

    /**
     * Geeft de laatst tegengekomen database-error terug.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * -
     *
     * Resultaat:
     * @return string Vanzelfsprekend.
     * 
     * Versie:
     * @version 1.0
     */
    function databaseError() {
        return mysqli_error($_databaseConn);
    }

    /**
     * Geeft het volgende record terug uit een resultaatset.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param mysqli_result Een resultaatset.
     *
     * Resultaat:
     * @return array Key-value array met het eerstvolgende resultaat dat opgehaald dient te worden. 
     * NULL als er geen eerstvolgende resultaat is.
     * 
     * Versie:
     * @version 1.0
     */
    function databaseFetchAssoc($queryResult) {
        return mysqli_fetch_array($_databaseConn, $queryResult);
    }

    /**
     * Geeft de ID terug van het record dat het laatst toegevoegd is aan een tabel.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * -
     *
     * Resultaat:
     * @return int Vanzelfsprekend.
     * 
     * Versie:
     * @version 1.0
     */
    function databaseInsertID() {
        return mysqli_insert_id($_databaseConn);
    }
?>