<!-- 
    Nama file : krs_11S20019.phps
    NIM : 11S20019
    kelas : 13IF1 
-->

<?php
    $krs = array(
        ["kodeMK"=> "11S3109", "namaMK"=> "Pengembangan Aplikasi Berbasis Web", "sks" => 4],
        ["kodeMK"=> "11S3101", "namaMK"=> "Analisis dan Perancangan Perangkat Lunak", "sks" => 3],
        ["kodeMK"=> "10S3109", "namaMK"=> "Kecerdasan Buatan", "sks" => 3],
        ["kodeMK"=> "11S3116", "namaMK"=> "Teori Bahasa Formal dan Automata", "sks" => 3],
        ["kodeMK"=> "11S3112", "namaMK"=> "Pengujian dan Penjaminan Mutu Perangkat Lunak", "sks" => 3],
        ["kodeMK"=> "11S3105", "namaMK"=> "Kriptografi dan Keamanan Informasi", "sks" => 3],
    );
    $sks = array(
        4,
        3,
        3,
        3,
        3,
        3,
    );
    $name = "Hedrin S. Sitorus";
    $nim = "11S20019";

    $hitung = 0;
    for($i = 0; $i<sizeof($sks); $i++){
        $hitung+=$sks[$i];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS_11S20019</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        hr{
            border: 10px black;
        }
    </style>
</head>
<body>
    <h2>Kartu Rencana Studi (KRS)</h2>
    <hr>

    <table cellspacing="5">
        <tr>
            <td width="52%"><b>NIM</td>
            <td><b><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td><b>Nama</td>
            <td><b><?php echo $name; ?></td>
        </tr>
    </table>
    <br><br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">SKS</th>
            </tr>
        </thead>

        <tbody>
            <?php for($i=0; $i<sizeof($krs); $i++){ ?>
            <tr>
                <th scope="row"><?= $krs[$i]["kodeMK"] ?></th>
                <td><?= $krs[$i]["namaMK"] ?></td>
                <td><?= $krs[$i]["sks"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tr>
            <td colspan="2">TOTAL</td>
            <td>
                <?php  echo($hitung); ?>
            </td>
        </tr>
    </table>

</body>
</html>