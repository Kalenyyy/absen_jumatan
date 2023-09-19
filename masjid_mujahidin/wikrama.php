<?php
require '../controllers.php';

$siswa_wikrama = query("SELECT * FROM tb_siswa WHERE rayon = 'wikrama'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>cicurug</title>
    <style>
        header {
            background-color: #ececec;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <h3>absen <span style="color:#3D6F8A;">jumatan</span></h3>
        <a href="../index.php">Back</a>
    </header>

    <form action="" method="post">
        <a href="cicurug.php">Rayon Cicurug</a>
        <table border="1" cellspacing="0" cellpadding="7">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Rayon</th>
                    <th>Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <?php $angka = 1; ?>
                <?php foreach ($siswa_wikrama as $wikrama) : ?>
                    <tr>
                        <td><?php echo $angka; ?></td>
                        <td><?= $wikrama['nama']; ?></td>
                        <td><?= $wikrama['rayon']; ?></td>
                        <td>
                            <select name="hadir" id="">
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                                <option value="Alpha">Alpha</option>
                            </select>
                        </td>
                    </tr>
            </tbody>
            <?php $angka++; ?>
        <?php endforeach ?>
        </table>
        <button type="submit" name="submit">Save</button>
    </form>

</body>

</html>