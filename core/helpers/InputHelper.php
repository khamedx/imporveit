<?php
    /**
     * Sanitatie en/of validatiehelper.
     * 
     * @author Danny Kluin
     */
    include_once $_SERVER['DOCUMENT_ROOT'] . '/core/helpers/DatabaseHelper.php';

    /**
     * Controleert of alle keys uit $requiredParams aanwezig zijn in de $actualParams array.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param array $actualParams De lijst waarop gecontroleerd worden
     * @param array $requiredParams De lijst met verwachte keys in $actualParams.
     * 
     * Resultaat:
     * @return array Een array van booleans waarin staat of alle parameters aanwezig zijn in de array.
     * 
     * Versie:
     * @version 1.0
     */
    function validate($actualParams, $requiredParams) {
        if (is_array($requiredParams)) {
            $result = array();

            foreach ($actualParams as $key => $value) {
                $result[$key] = isset($actualParams[$key]) && (is_numeric($actualParams[$key]) || !empty($actualParams[$key]));
            }
            
            foreach ($requiredParams as $key => $value) {
                if (!isset($result[$value])) {
                    $result[$value] = isset($actualParams[$key]) && (is_numeric($actualParams[$key]) || !empty($actualParams[$key]));
                }
            }

            return $result;
        } else {
            return isset($actualParams) && (is_numeric($actualParams) || !empty($actualParams));
        }

        return $result;
    }

    /**
     * Saniteert de inputdata.
     * 
     * Auteur:
     * @author Danny Kluin
     * 
     * Parameters:
     * @param string|array De inputdata om te saniteren.
     * 
     * Resultaat:
     * @return string|array De gesaniteerde data. 
     * Als er een array als parameter meegegeven is, krijg je bij deze functie ook een array terug. 
     * Als er een string meegegeven is, krijg je een string terug.
     * 
     * Versie:
     * @version 1.0
     */
    function sanitize($input) {
        if (is_array($input)) {
            foreach ($input as $key => $value) {
                $input[$key] = trim(htmlspecialchars(databaseFetchAssoc($value)));
            }
        } else {
            $input = trim(htmlspecialchars(databaseFetchAssoc($input)));
        }
        
        return $input;
    }

?>


