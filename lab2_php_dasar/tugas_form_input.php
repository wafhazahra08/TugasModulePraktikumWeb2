<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir"><br><br>
        Pekerjaan:
        <select name="pekerjaan">
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Marketing">Marketing</option>
            <option value="Mahasiswa">Mahasiswa</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Menghitung umur
        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        // Menghitung gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case 'Programmer':
                $gaji = 5000000;
                break;
            case 'Desainer':
                $gaji = 4500000;
                break;
            case 'Marketing':
                $gaji = 4000000;
                break;
            default:
                $gaji = 0;
                break;
        }

        // Menampilkan output
        echo "<h2>Output:</h2>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $tgl_lahir<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp $gaji<br>";
    }
    ?>
</body>
</html>
