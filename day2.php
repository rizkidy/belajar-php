<?php
// $nama = "Cuan Maharani";

// echo $nama;
// echo $nama;
// echo $nama;
// echo $nama;
// echo $nama;

// Perulangan

// $no = 15;

// for ($i = 0; $i < $no; $i++) {
//     $n = $i + 1;
//     echo "$n. $nama <br>";
// }

// $i = 0;
// $no = 7;

// while ($i < $no) {
// $n = $i + 1;
// echo "$n. $nama <br>";
// $i++;
// }

// do {
//     $n = $i + 1;
//     echo "$n. $nama <br>";
//     $i++;
// } while ($i < $no);


// $data = array('Avanza', 'Xenia', 'Mitsubishi', 'Lamborghini', 'Panther');

// for($i=0; $i < count($data); $i++) {
//     echo $data[$i] . "<br>";
// }

// foreach ($data as $namaMobil) {
//     echo "$namaMobil <br>";
// }

// Percabangan

// $namaGaming = "Ivankun";

// if ($namaGaming = "Megawatichan") {
//     echo $namaGaming . " adalah Proplayer";
// }else if($namaGaming = "Cuan Maharani"){
//     echo $namaGaming . " adalah Badut MPL";
// }else {
//     echo $namaGaming . " adalah rakyat biasa yang tidak berkuasa";
// }

// switch ($namaGaming) {
//     case "Megawatichan";
//         echo $namaGaming . " adalah Proplayer";
//         break;
//     case "Cuan Maharani";
//         echo $namaGaming . " adalah Badut MPL";
//         break;
//     default;
//         echo $namaGaming . " adalah rakyat biasa yang tidak berkuasa";
// }

// $usia = 22;
// $mahasiswa = true;

// if ($usia > 20) {
//     if ($mahasiswa) {
//         echo "Kuliah yang bener ya cuki";
//     } else {
//         echo "Kau belum kuliah kids?";
//     }
// } else {
//     echo "Saya bahkan gatau kamu ini manusia apa bukan";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pamer Mobil Klean</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Merek Mobil</label>
        <input type="text" name="mobil">
        <label>Total</label>
        <input type="text" name="total">
        <input type="submit" name="submit">
    </form>

    <?php
    if (!empty($_POST['submit'])) {

        switch ($_POST['mobil']) {
            case "Avanza";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            case "Lamborghini";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            case "Panther";
                $pesan = "Kamu punya mobil merek " . $_POST['mobil'];
                break;
            default:
                $pesan = "Skip merek mobilmu ga terkenal";
        }

        for ($i = 0; $i < $_POST['total']; $i++) {
            $n = $i + 1;
            echo $pesan . " total : $n mobil." . "<br>";
        }
    } else {
        echo "Kamu belum punya mobil ya?";
    }
    ?>
</body>

</html>