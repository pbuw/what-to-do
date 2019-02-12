<br>
<div class="row">
    <div class="col s4"></div>
    <div class="col s4">
        <nav class="center-align">
            <div class="nav-wrapper">
                <div class="input-field">
                    <input class="blue white-text" placeholder="Search what to do" id="myInput" oninput="myFunction()" id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </div>
        </nav>
    </div>
    <div class="col s4"></div>
</div>
<div class="row">
    <div class="col s4"></div>
    <div class="col s4">
        <div class="card">
            <div class="card-content">
                <div class="card-title"><a href="?site=what-to-do">Hallo</a></div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="card-title">zeme</div>
            </div>
        </div>
    </div>
    <div class="col s4"></div>
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
</script>