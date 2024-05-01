# TUGAS PEMOGRAMAN WEB 2
NAMA           : WAFHA ZAHRA MULQIYA

NIM            : 312210577

KELAS          : TI.22.A.5

DOSEN PENGAMPU : AGUNG NUGROHO S.KOM., M.KOM

MATA KULIAH    : PEMOGRAMAN WEB 2

# **Daftar Isi**
***Harap klik satu persatu agar update penjelasan dan hasil program terlihat berurutan***

- **[Lab2 PHP_DASAR](#lab2-PHP_DASAR)**

- **[Lab3 PHP_DATABASE](#Lab3-PHP_DATABASE)**

- **[Lab4 PHP_MODULAR](#Lab4-PHP_MODULAR)**

- **[Lab5 PHP_OOP](#Lab5-PHP_OOP)**


## Lab2 PHP_DASAR
* Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab2_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.


* Langkah-langkah Praktikum
1. Install XAMPP Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan direktorinya (misal: d:\xampp)

2. Memulai PHP Buat folder lab2_php_dasar pada root directory web server (d:\xampp\htdocs)

3. PHP Dasar Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut :

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
    <h2>Menggunakan variable</h2>
    <?php
    $nim = "312210577";
    $nama = 'WAFHA ZAHRA MULQIYA';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>
    <h2>Pengulangan For</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i = 1; $i <= 10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i = 10; $i >= 1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
    <h2>Perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    while ($i <= 10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
    <h2>Perulangan Dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i <= 10);
    ?>
</body>

</html>
```
> **Output**
![web2-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/4a856b9e-f3ad-44fd-a401-fe565fa763d3)

![web2-2](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/d084b01d-dbb7-4da1-9d16-6122f68633bc)

![web2-3](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/8a67c099-2e42-4079-93bd-541f85c3a9aa)



## TUGAS FORM INPUT

```  
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
```
> **Output**

![web2-4](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/8c5945e7-3512-4f44-8737-318bcc544a68)

## Lab3 PHP_DATABASE

* Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab3_php_database pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

* Langkah-langkah Praktikum
1. Persiapan Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

2. Menjalankan MySQL Server Untuk menjalankan MySQL Server dari menu XAMPP Control.

3. Membuat Database: Studi Kasus Data Barang
```
CREATE DATABASE latihan1;
```
```
CREATE TABLE data_barang (
    id_barang int(10) auto_increment Primary Key,
    kategori varchar(30),
    nama varchar(30),
    gambar varchar(100),
    harga_beli decimal(10,0),
    harga_jual decimal(10,0),
    stok int(4)
);
```
![Screenshot (167)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/90e56746-e5a5-4737-8827-3ba4cdb5c041)


4. Menambah Data
```
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```

![Screenshot (150)](https://github.com/syifaaurellia/Lab8web/assets/115867244/db3281b0-e06c-4461-98e6-33821fedf087)


5. Membuat Program CRUD, Buat folder lab3_php_database pada root directory web server (d:\xampp\htdocs)

6. Membuat file koneksi database, Buat file baru dengan nama `koneksi.php`
```
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";
?>
```
> Buka melalui browser untuk menguji koneksi database untuk menyampilkan pesan koneksi berhasil, ***uncomment*** pada perintah echo “koneksi berhasil”;

![web3-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/b38d7527-3b10-4304-a5fe-bd8882ec6b47)

7. Membuat file index untuk menampilkan data (Read), buat file baru dengan nama `index.php`

> **Output**
![web3-2](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/396975ea-69f3-40ec-a52d-69ee78583a5a)

8. Menambah Data (Create), buat file baru dengan nama `tambah.php`

> **Output**
![web3-3](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/dacec31b-b137-4f00-962a-7b518b3db928)

9. Mengubah Data (Update), buat file baru dengan nama `ubah.php`

> **Output**

![web3-4](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/0eed5c8d-69ff-4409-8b2f-a6d37a234f65)

10. Menghapus Data (Delete), buat file baru dengan nama `hapus.php`
```
<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
>
```
> **Output**
![web3-5](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/fe775343-04ed-4e73-a97e-2c6cab6a1ccd)

## Lab4 PHP_MODULAR
* Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode

2. Buat folder baru dengan nama `lab4_php_modular` pada docroot webserver (htdocs)

3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya

* Langkah-langkah Praktikum
- Jalankan Apache dan MySQL server dari menu XAMPP Control
- Kemudian buat folder baru dengan nama lab4_php_modular pada docroot webserver (c:\xampp\htdocs). Kemudian buka melalui browser dengan mengakses URL: http://localhost/lab4_php_modular/.
![web4-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/aa15fa0f-8d38-465a-9072-c23948961ddf)

1. Buat file dengan nama `header.php`
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
```

2. Buat file dengan nama `footer.php`
```
        <footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
```

3. Buat file dengan nama `home.php`
```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```

4. Buat file dengan nama `about.php`
```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman About</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```
> **Output**

![web4-2](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/674661b8-c7b9-4b66-8781-12e1090c82bb)
![web4-3](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/13ff8dd2-a1be-4972-84c7-8d645c01c9bd)
![web4-4](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/e7a003f1-3bce-4369-871b-56f156598839)


## Pertanyaan dan Tugas
> Implementasikan konsep modularisasi pada kode program Praktikum 3 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama.

1. Buat folder baru dengan nama `lab4_php_praktikum`
![web4-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/aa15fa0f-8d38-465a-9072-c23948961ddf)

- Setelah itu buat beberapa file sama seperti file-file yang ada pada praktikum 3, untuk script lebih lengkapnya kalian dapat langsung lihat pada folder
lab4_php_praktikum.

2. Hasil Output `koneksi.php` :
   
![web3-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/b38d7527-3b10-4304-a5fe-bd8882ec6b47)

3. Hasil Output `home.php` :
   
![web4-5](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/ff544318-5aa6-427d-b676-75b6f5d812e9)

4. Hasil Output `tambah.php` :
   
![web4-6](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/6c90bc4e-43af-4fa5-b8e2-b48759d2cea1)

5. Hasil Output `ubah.php` :
   
![web4-7](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/6d2569e5-e7c1-4a69-8f7f-f2475f8acdd9)

6. Hasil Output `hapus.php` :
   
![web4-8](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/29ad503f-8a66-4cf6-a39d-8038998e5436)

## Lab5 PHP_OOP
* Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode

2. Buat folder baru dengan nama `lab5_php_oop` pada docroot webserver (htdocs)

3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya

* Langkah-langkah Praktikum
- Buat file baru

> `Database.php`
```
<?php
class Database
{
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;
    public function __construct()
    {
        $this->getConfig();
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db_name
        );
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    private function getConfig()
    {
        include_once("config.php");
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function get($table, $where = null)
    {
        if ($where) {
            $where = " WHERE " . $where;
        }
        $sql = "SELECT * FROM " . $table . $where;
        $sql = $this->conn->query($sql);
        $sql = $sql->fetch_assoc();
        return $sql;
    }
    public function insert($table, $data)
    {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $column[] = $key;
                $value[] = "'{$val}'";
            }
            $columns = implode(",", $column);
            $values = implode(",", $value);
        }
        $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }
    public function update($table, $data, $where)
    {
        $update_value = "";
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $update_value[] = "$key='{$val}'";
            }
            $update_value = implode(",", $update_value) ;
        }
        $sql = "UPDATE " . $table . " SET " . $update_value . " WHERE " . $where;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($table, $filter)
    {
        $sql = "DELETE FROM " . $table . " " . $filter;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
}
```

> `Form_input.php`
```
<?php

/**
 * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
 **/
include "form.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

```

> `Form.php`
```
<?php

/**
 * Nama Class: Form
 * Deskripsi: CLass untuk membuat form inputan text sederhan
 **/
class Form
{
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;
    public function _construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }
    public function displayForm()
    {
        echo "<form action='" . $this->action . "' method='POST'>";
        echo '<table width="100%" border="0">';
        for ($j = 0; $j < count($this->fields); $j++) {
            echo "<tr><td

align='right'>" . $this->fields[$j]['label'] . "</td>";

            echo "<td><input type='text'

name='" . $this->fields[$j]['name'] . "'></td></tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='" . $this->submit . "'></td></tr>";
        echo "</table>";
    }
    public function addField($name, $label)
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }
}
```
> `Mobil.php`
```
<?php

/**
 * Program sederhana pendefinisian class dan pemanggilan class.
 **/
class Mobil
{
    private $warna;
    private $merk;
    private $harga;
    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }
    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }
    public function tampilWarna()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}
// membuat objek mobil
$a = new Mobil();
$b = new Mobil();
// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();
// memanggil objek
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
```
> **Output**

![web5-1](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/1fec0add-e4b2-4daa-a1b7-1cb668154bf3)
![web5-2](https://github.com/wafhazahra08/TugasModulePraktikumWeb2/assets/131223804/d4581b7c-0d74-437f-8881-a144cca768f1)

  
# Sekian, Terima kasih.

