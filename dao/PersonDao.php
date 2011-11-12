<?php

require_once 'db/DbAccess.php';
require_once 'domain/Person.php';

/**
 * Description of PersonDao
 *
 * @author stephan
 */
class PersonDao {

    function readAllPersons() {
        $db = new DbAccess();
        $db->connect();
        $result = $db->execute("SELECT * FROM persons");
        $persons=array();
        while ($row = mysql_fetch_array($result)) {
           $p = new Person();
           $p->id = $row["id"];
           $p->firstname = $row["firstname"];
           $p->lastname = $row["lastname"];
           $persons[$p->id] = $p;
        }
        return $persons;
    }

}

?>
