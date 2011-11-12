<?php

/**
 * Zentraler Datenbankzugriff
 *
 * @author stephan
 */
class DbAccess {

    private $url = "localhost:8889";
    private $db_name = "BdB";
    private $user = "bdb";
    private $password = "bdb";
    private $link;

    function connect() {
        $this->link = mysql_pconnect($this->url, $this->user, $this->password);
        $db_selected = mysql_select_db($this->db_name, $this->link);
        if (!$db_selected) {
            die('keine Verbindung möglich: ' . mysql_error());
        }
    }

    function execute($sql) {       
        $res = mysql_query($sql, $this->link);
        if (!$res) {
            die('Ungültige Abfrage: ' . mysql_error());
        }
        return $res;
    }

    function close() {
        mysql_close($this - link);
    }

}

?>
