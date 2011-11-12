<?php
include_once 'dao/PersonDao.php';
$pdao = new PersonDao();
?>
<html>
    <head>
        <title>Startseite Bernd das Brot</title>
    </head>

    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>firstname</td>
                <td>lastname</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pdao->readAllPersons() as $person) {
                echo "<tr>";
                echo "<td>" . $person->id . "</td>";
                echo "<td>" . $person->firstname . "</td>";
                echo "<td>" . $person->lastname . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </body>
</html>

