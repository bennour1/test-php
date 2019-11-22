<table>
<tr>
<th>Nom</th>
<th>age</th>
<th>competences</th>
</tr>
<?php foreach($personData as $person): ?>
<tr>
        <td> <?= $person["name"] ?> </td>
        <td> <?= $person["age"] ?> </td>
        <td> <?= implode(",", $person["skills"]) ?> </td>
</tr>
<?php endforeach ?>
</table>