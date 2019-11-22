<h1 class="text-center">Liste des contacts</h1>
<table class="table table-bordered table-dark table-striped  text-center">
    <tr>
        <th scope="col">id</th>
        <th scope="col">firstName</th>
        <th scope="col">name</th>
    </tr>
    <?php foreach($$viewName as $person): ?>
        <tr>
            <td> <?= $person["id"] ?> </td>
            <td> <?= $person["firstName"] ?> </td>
            <td> <?= $person["name"] ?> </td>

        </tr>
    <?php endforeach ?>
</table>