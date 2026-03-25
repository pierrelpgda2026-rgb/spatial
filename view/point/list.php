<h2>Liste des points</h2>

<a href="index.php?action=createPoint">Ajouter</a>

<table class="table table-dark table-striped-columns mt-5" >
<tr>
    <th>ID</th>
    <th>Latitude</th>
    <th>Longitude</th>
    <th>Surface</th>
    <th>Zone</th>
    <th>Actions</th>
</tr>

<?php while($p = mysqli_fetch_assoc($points)) { ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['latitude'] ?></td>
    <td><?= $p['longitude'] ?></td>
    <td><?= $p['surface'] ?></td>
    <td><?= $p['zone_nom'] ?></td>
    <td>
        <a href="index.php?action=editPoint&id=<?= $p['id'] ?>">Modifier</a>
    </td>
</tr>
<?php } ?>
</table>