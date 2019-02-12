<?php

class constructor {

    public function construct() {
        if (file_exists("content/components/head.php")) {
            include "content/components/head.php";
        }
        if (file_exists("content/components/nav.php")) {
            include "content/components/nav.php";
        }
        if (file_exists("content/components/header.php")) {
            include "content/components/header.php";
        }
        if (!empty($_GET["site"])) {
            $site = $_GET["site"] . ".php";
            if (!file_exists("content/sites/" . $site)) {
                $site = "404.php";
            }

        } else {
            $site = "index.php";
        }
        echo "<body>";
        include "content/sites/" . $site;
        echo "<script type='text/javascript' src='framework/resources/materialized/js/materialize.min.js'></script></body>";

        if (file_exists("content/components/footer.php")) {
            include "content/components/footer.php";
        }
    }

}