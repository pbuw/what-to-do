<?php
include "framework/logic/databaseController.php";
$dbcontroller = new databaseController();
if(!empty($_GET["delete"])){
    $dbcontroller->deleteTask($_GET["delete"]);
}
if (!empty($_POST["task"]) && !empty($_POST["position"])) {
    $dbcontroller->addTask($_POST["task"], $_POST["position"], $_GET["wtdId"]);
}
$wtd = $dbcontroller->getWTD($_GET["wtdId"]);
$tasks = $dbcontroller->getTasks($_GET["wtdId"]);

?>

<div class="row animated fadeIn">
    <div class="col s4 m0"></div>
    <div class="col s12 m4 l4">
        <br>
        <br>
        <div class="card">
            <div class="card-content">
                <div class="card-title amber-text darken-4">
                    <?php echo $wtd[0][1]; ?>
                </div>

                <br>
                <?php foreach ($tasks as &$value) {
                    echo "
            <div class='right deletes  animated infinite wobble' style='display: none'><a class='black-text' href='index.php?site=what-to-do&wtdId=" . $_GET["wtdId"] . "&delete=" . $value[0] . "'><i class='material-icons'>delete</i></a></div>
<label>
                    <input type='checkbox' class='filled - in blue'/>
                    <span>" . $value[1] . "</span>
                </label><br>";
                } ?>
                <form action="" method="post">
                    <input name="task" placeholder="add a new task" type="text" required>
                    <input name="position" type="number" style="display: none;" value="<?php echo count($tasks) + 1; ?>"
                           required>
                    <button type="submit" class="amber darken-4" style="visibility:hidden;">Add new Task</button>
                </form>
                <br>
                <br>
                <p><?php echo $wtd[0][2]; ?></p>
            </div>
        </div>
        <a class="btn amber darken-4" href="/">Back</a>

    </div>
    <div class="col s4 m0"></div>
</div>

<script> function showDelete() {
        var x = document.getElementsByClassName("deletes");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "block";
        }
    }
</script>