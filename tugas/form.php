<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUGAS</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama :</label>
        <input type="text" name="nama"><br/>

        <label for="tl">Tgl_lahir :</label>
        <input type="date" name="Tgl_lahir"><br/>

        <label for="kerja">Pekerjaan :</label>
        <select name="kerja" id="kerja">
            <option value="IoT">IoT</option>
            <option value="back">Back-End Developer</option>
            <option value="Pydev">Python Developer</option>
            <option value="adev">Android Developer</option>
        </select><br>
        <input type="submit" value="Kirim"><br/>
    </form>
    <?php
        function KerjA($kerja) {
            // $kerja = $_POST['kerja'];
            if ($kerja == 'IoT') {
                echo '<br> Pekerjaan: IoT - Gaji: 10.000.000';
            }   elseif ($kerja == 'back') {
                echo '<br> Pekerjaan: Back-end Developer - Gaji: 10.800.000';
            }   elseif ($kerja == "Pydev") {
                echo '<br> Pekerjaan: Python Developer - Gaji: 20.000.000';
            }   elseif ($kerja == 'adev') {
                echo '<br> Pekerjaan: Android Developer - Gaji: 25.000.000';
            }
        }
        function lhr($tgl) {
            $tanggal_lahir = new DateTime($tgl);
            $sekarang = new DateTime("today");
            if ($tanggal_lahir > $sekarang) { 
                $thn = "0";
                $bln = "0";
                $tgl = "0";
            }
            $thn = $sekarang->diff($tanggal_lahir)->y;
            $bln = $sekarang->diff($tanggal_lahir)->m;
            $tgl = $sekarang->diff($tanggal_lahir)->d;
            echo "<br> Usia : ";
            echo $thn." tahun ".$bln." bulan ".$tgl." hari";
        }
        echo 'Selamat Datang ' . $_POST['nama'];
        echo '<br> Tanggal_lahir: ' . $_POST['Tgl_lahir'];
        echo lhr($_POST['Tgl_lahir']);
        $krj = "<br>" . KerjA($_POST['kerja']);
    ?>
</body>
</html>