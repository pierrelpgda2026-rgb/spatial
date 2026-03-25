<?php $p = mysqli_fetch_assoc($point); ?>

<form method="POST">
    Latitude: <input type="text" name="latitude" value="<?= $p['latitude'] ?>"><br>
    Longitude: <input type="text" name="longitude" value="<?= $p['longitude'] ?>"><br>
    Surface: <input type="text" name="surface" value="<?= $p['surface'] ?>"><br>
    Zone ID: <input type="text" name="id_zone" value="<?= $p['id_zone'] ?>"><br>

    <button type="submit">Modifier</button>
</form>