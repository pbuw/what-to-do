<?php
include "framework/logic/databaseController.php";
$dbcontroller = new databaseController();
if (!empty($_POST["title"]) && !empty($_POST["tags"])) {
    $_POST["comment"];
    if (!empty($_POST["comment"])) {
        $comment = $_POST["comment"];
    } else {
        $comment = null;
    }
    $dbcontroller->addWtd($_POST["title"], $comment, $_POST["tags"]);
}
echo $_GET["delete"];
if (!empty($_GET["delete"])) {
    $dbcontroller->deleteWtd($_GET["delete"]);
}

$wtds = $dbcontroller->getWTDs();
?>
<br>
<div class="row">

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <form method="post" action="">
            <div class="modal-content">
                <label>
                    Title
                    <input name="title" required>
                </label>
                <label>
                    Tags
                    <input name="tags" required>
                </label>
                <label>
                    Comment
                    <textarea name="comment" class="materialize-textarea"></textarea>
                </label>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close waves-effect waves-green btn-flat amber darken-4 white-text">
                    Add
                </button>
            </div>
        </form>
    </div>
    <div class="col s4 m0"></div>
    <div class="col s12 m4 l4">
        <nav class="center-align">
            <div class="amber darken-4 nav-wrapper">
                <div class="amber darken-4 input-field">
                    <input class="amber darken-4 white-text" placeholder="Search what to do" id="myInput"
                           oninput="myFunction()"
                           id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </div>
        </nav>
    </div>
    <div class="col s4 m0"></div>
</div>
<div class="row">
    <div class="col s4 m0"></div>
    <div class="col s12 m4 l4">
        <?php
        $i = 0;
        foreach ($wtds as &$value) {
            echo "
<div class='card animated fadeIn delay-" . $i . "ms'>
            <div class='card-content'>
            <div class='right deletes animated infinite wobble' style='display: none'><a class='black-text' href='index.php?delete=" . $value[0] . "'><i class='material-icons'>delete</i></a></div>
                <div class='card-title'><a class='green-text' href='?site=what-to-do&wtdId=" . $value[0] . "'>" . $value[1] . "<span
                                class='hide'>" . $value[3] . "</span></a></div>
            </div>
        </div>
        ";
            this . $i++;

        }
        ?>
    </div>
    <div class="col s4 m0"></div>
</div>
<script>
    function myFunction() {
        var input, filter, card, title, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        card = document.getElementsByClassName("card");
        for (i = 0; i < card.length; i++) {
            title = card[i].getElementsByClassName("card-title")[0];
            txtValue = title.textContent || title.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                card[i].style.display = "";
            } else {
                card[i].style.display = "none";
            }
        }
    }

    function showDelete() {
        var x = document.getElementsByClassName("deletes");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "block";
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, null);
    });

</script>