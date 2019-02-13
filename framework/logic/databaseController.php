<?php

class databaseController {
    
    private function getConnection() {

        /**
         * DONT COMMIT!
         */
        /**
         * DONT COMMIT!
         */

        //return mysqli_connect("127.0.0.1", "nutzer", "passwort", "datenbank");
    }

    public function getWTDs() {

        $connection = $this->getConnection();
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $rows = [];
        $result = $connection->query("SELECT * FROM `wtd` ");
        while($row = mysqli_fetch_array($result))
        {

            $rows[] = $row;
        }
        return $rows;
    }
}