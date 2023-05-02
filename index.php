<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalculator php</title>
    <link rel="stylesheet" href="mystyle.css">
</head>

<?php
if(isset($_POST['hitung'])){
    $bil1 = $_POST['angka1'];
    $bil2 = $_POST['angka2'];
    $opsi = $_POST['opsi'];
    switch ($opsi) {
        case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
        case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
        case 'kali':
            $hasil = $bil1 * $bil2;
            break;
        case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
        case 'mod':
            $hasil = $bil1 % $bil2;
            break;
        case 'akar':
            $hasil = sqrt($bil1);
            break;
    }
}
?>
<body>
    <div class="isi"> 
    <h1 class="judul"> kalkulator </h1>
        <form action="index.php" method="POST">
            <input type="text" name="angka1" class="input">
            <input type="text" name="angka2" class="input">
            <select name="opsi" class="operasi">
                <option value="tambah"> + </option>
                <option value="kurang"> - </option>
                <option value="kali"> * </option>
                <option value="bagi"> / </option>
                <option value="mod"> % </option>
                <option value="akar"> & </option>
            </select>
            <input type="submit" name="hitung" value="hitung" class="hitung"> 

            <?php if (isset($_POST['hitung'])) { ?>
                <input type="text" class="input" value="<?php echo $hasil; ?>">
            <?php } ?>            

        </form>
    </div>

</body>
</html>