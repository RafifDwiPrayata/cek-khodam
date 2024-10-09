<?php


$khodam = array(
    'batu kerikil',
    'gerobak somay',
    'centong nasi',
    'ketan hitam',
    'sendal jepit',
    'balon gas',
    'sarung bantal',
    'nasi uduk',
    'tukang cukur',
    'pisang goreng',
    'kucing belang',
    'sandal buaya',


);
$hasil = '';
if(isset($_POST['nama']) && !empty($_POST['nama'])) {
    $nama = $_POST['nama'];
    $random_khodam = array_rand($khodam, 1);
    $hasil = $khodam[$random_khodam];
}

?>

<!DOCTYPE html> 
<html>
    <head>
        <title>cek kodam</title>
        <link rel="stylesheet" href="cekkdm.css">
    </head>
    <body>
        <div class="container">
            <form method="post">
                <div class="cek-title margin-y">
                    Cek Khodam
                </div>
                <div class="cek-desc margin-y">
                    Masukkan nama untuk mengetahui khodam
                </div>
                <div>

                    <input type="text" name="nama" class="nama margin-y" placeholder="Input namamu">
                </div>
                <div>
                    <input type="submit" value="Cek" class="cek margin-y">
                </div>
                <div class="hasil margin-y">
                    Khodam: <?php echo $hasil ?>
                </div>
                <div class="hasil-desc margin-y">
                    Awokawokawok
                </div>
            </form>
        </div>
    </body>
</html>