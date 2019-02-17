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

        $rows = [];
        $result = $connection->query("SELECT * FROM `wtd` ");
        while ($row = mysqli_fetch_array($result)) {

            $rows[] = $row;
        }
        return $rows;
    }

    public function getWTD($id) {

        $connection = $this->getConnection();

        $rows = [];
        $result = $connection->query("SELECT * FROM `wtd` WHERE wtdId = '" . $id . "'");
        while ($row = mysqli_fetch_array($result)) {

            $rows[] = $row;
        }
        return $rows;
    }

    public function getTasks($id) {

        $connection = $this->getConnection();


        $rows = [];
        $result = $connection->query("SELECT * FROM `tasks` WHERE wtdId = '" . $id . "'ORDER BY position");
        while ($row = mysqli_fetch_array($result)) {

            $rows[] = $row;
        }
        return $rows;
    }

    public function addWtd($title, $comment, $tags) {

        $connection = $this->getConnection();
        $connection->query("INSERT INTO `wtd` (`wtdId`, `title`, `comment`, `tags`) VALUES (NULL, '" . $title . "', '" . $comment . "', '" . $tags . "');");
    }

    public function deleteWtd($id) {

        $connection = $this->getConnection();
        $connection->query("DELETE FROM `wtd` WHERE `wtd`.`wtdId` = " . $id . ";");
    }

    public function addTask($task, $position, $wtdId) {
        $connection = $this->getConnection();

        $connection->query("INSERT INTO `tasks` (`taskId`, `content`, `position`, `wtdId`) VALUES (NULL, '" . $task . "', '" . $position . "', '" . $wtdId . "')");
    }

    public function deleteTask($id) {

        $connection = $this->getConnection();
        $connection->query("DELETE FROM `tasks` WHERE `tasks`.`taskId` = " . $id . ";");
    }
}