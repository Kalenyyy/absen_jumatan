<?php
session_start();
if (!isset($_SESSION['type'])) {
    header("location: ../../login.php");
}
require '../../controllers.php';

$siswa_cisarua = query("SELECT * FROM tb_kongsi WHERE type = 'sukasari_2'");

if (isset($_POST['save'])) {
    $tanggal_absen = $_POST['tanggal_absen'];

    foreach ($siswa_cisarua as $siswa) {
        $siswa_id = $siswa['id'];
        $kehadiran = $_POST['status_kehadiran'][$siswa_id];
        $alasan = $_POST['alasan_tidak_hadir'][$siswa_id];

        // Simpan data kehadiran beserta alasan ke database
        $sql = "UPDATE tb_kongsi SET kehadiran = '$kehadiran', alasan_tidak_hadir = '$alasan', date = '$tanggal_absen' WHERE id = $siswa_id";
        if (mysqli_query($server, $sql)) {
            echo "<script>
            alert ('Data Tersimpan');
            document.location.href = '../../login.php';
           </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($server);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>cisarua</title>
    <style>
        header {
            background-color: #ececec;
            padding: 2rem;
        }

        /* Tambahkan gaya untuk modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <header>
        <h3>absen <span style="color:#3D6F8A;">jumatan</span></h3>
        <a href="../../logout.php">logout</a>
    </header>

    <form action="" method="post">
        <input type="date" name="tanggal_absen" id="" required>
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
                <?php foreach ($siswa_cisarua as $siswa) : ?>
                    <tr>
                        <td><?= $angka; ?></td>
                        <td><?= $siswa['siswa_id']; ?></td>
                        <td><?= $siswa['rayon']; ?></td>
                        <td>
                            <input type="radio" name="status_kehadiran[<?= $siswa['id']; ?>]" value="hadir" required> Hadir
                            <input type="radio" name="status_kehadiran[<?= $siswa['id']; ?>]" value="izin" onclick="openModal(<?= $siswa['id']; ?>)"> Izin
                            <input type="radio" name="status_kehadiran[<?= $siswa['id']; ?>]" value="sakit" onclick="openModal(<?= $siswa['id']; ?>)"> Sakit
                        </td>
                        <td>
                            <div id="myModal<?= $siswa['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal(<?= $siswa['id']; ?>)">&times;</span>
                                    <textarea name="alasan_tidak_hadir[<?= $siswa['id']; ?>]" rows="3" cols="30" placeholder="Alasan tidak hadir"></textarea>
                                    <button type="button" onclick="closeModal(<?= $siswa['id']; ?>)">Submit</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <?php $angka++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <button type="submit" name="save">Save</button>
    </form>

    <!-- Modal -->

    <script>
        function openModal(id) {
            // Tampilkan modal
            var modal = document.getElementById('myModal' + id);
            modal.style.display = 'block';

            // Set id siswa sebagai atribut data pada textarea
            var textarea = document.getElementById('alasanTextarea' + id);
            textarea.dataset.siswaId = id;
        }

        function closeModal(id) {
            // Tutup modal
            var modal = document.getElementById('myModal' + id);
            modal.style.display = 'none';
        }
    </script>

</body>

</html>