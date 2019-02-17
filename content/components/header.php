<div class="fixed-action-btn">

</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large amber darken-4">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red" onclick="showDelete()"><i class="material-icons">delete</i></a></li>
        <li><a class="modal-trigger btn-floating green darken-4" href="#modal1" ><i class="material-icons">add</i></a>
        </li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, null);
    });
</script>