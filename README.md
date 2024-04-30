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
![Screenshot (170)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/dc9d6bae-765f-4d5d-8b68-22acbd783e72)

![Screenshot (171)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/1b43a7c0-3b8b-42eb-8b03-a538f81ab982)

![Screenshot (172)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/db02de17-8ea2-489b-bb22-4f3b4c570399)


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

![Screenshot (153)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/9e56b07b-3152-4d36-b715-4cf3c5e9058c)

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

![Screenshot (24)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/4af00ce5-fd9f-47ed-8a41-a8bc43e5a4a6)

7. Membuat file index untuk menampilkan data (Read), buat file baru dengan nama `index.php`

> **Output**
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/674ae4f3-6c43-4722-a001-77b4d8774fdd)

8. Menambah Data (Create), buat file baru dengan nama `tambah.php`

> **Output**
![Screenshot (26)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/1f29937e-80c3-437d-b5fe-6bc80345e29b)

9. Mengubah Data (Update), buat file baru dengan nama `ubah.php`

> **Output**

![Screenshot (27)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/3039093e-9a41-43bc-8d93-b4a988f74dd7)

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
![Screenshot (25)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/9b870184-a856-4876-aed7-8e9415ae39d7)

## Lab4 PHP_MODULAR
* Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode

2. Buat folder baru dengan nama `lab4_php_modular` pada docroot webserver (htdocs)

3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya

* Langkah-langkah Praktikum
- Jalankan Apache dan MySQL server dari menu XAMPP Control
- Kemudian buat folder baru dengan nama lab4_php_modular pada docroot webserver (c:\xampp\htdocs). Kemudian buka melalui browser dengan mengakses URL: http://localhost/lab4_php_modular/.
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/affe1246-9b18-46c8-a078-df966143e434)

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

https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/3c05596b-7a15-4e9d-aee3-48529b8a8bd3

## Pertanyaan dan Tugas
> Implementasikan konsep modularisasi pada kode program Praktikum 3 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama.

1. Buat folder baru dengan nama `lab4_php_praktikum`
![Screenshot (48)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/e10a3268-ee78-4c20-a51a-abfa0c89a75e)

- Setelah itu buat beberapa file sama seperti file-file yang ada pada praktikum 3, untuk script lebih lengkapnya kalian dapat langsung lihat pada folder
lab4_php_praktikum.

2. Hasil Output `koneksi.php` :
   
![Screenshot (24)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/8d56ff81-e91b-433b-b51f-686e57dfaab8)

4. Hasil Output `home.php` :
   
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/0b578a51-fc91-4b4b-9841-3c375cdcced6)

6. Hasil Output `tambah.php` :
   
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/9b13689c-4149-4497-92e3-b14db590c061)

8. Hasil Output `ubah.php` :
   
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/29cc0ce6-1e49-42c1-aced-9cd14b26eba5)

6. Hasil Output `hapus.php` :
   
![image](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/5e6941b0-e6b4-4efd-846a-0c4d4635704d)


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

![Screenshot (168)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/36bedd6f-8905-4d1c-8428-a9ce93337d70)


![Screenshot (169)](https://github.com/zulaeha168/ModulPraktikumWeb2/assets/130324650/11535481-c042-4caa-afa3-8ddf87164017)

  
# Sekian, Terima kasih.

