<?php

$siswa = array ("siswa1" => array("Joko", "Medan", "12 Agustus 1994"),
                "siswa2" => array("Tata", "Jakarta", "12 Mei 1997"),
                "siswa3" => array("Toto", "Bekasi", "11 Agustus 2001"),
                "siswa4" => array("Titi", "Bekasi", "11 Agustus 2001")
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar membuat Tabel</title>

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 18px;
        }

        table th {
            padding: 10px;
            color: #fff;
            background-color: #2A72BA;
            border-top: 1px black solid;
            border-bottom: 1px black solid;

        }

        table td {
            padding: 10px;
            border-top: 1px black solid;
            border-bottom: 1px black solid;
        }

        tr:nth-child(odd) {
            background-color: #DFEBF8;
        }
    </style>
</head>
<body>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
            </tr>
            <?php
                $i=1;
                foreach ($siswa as $value) {
                    echo "<tr>";
                    echo "<td>".str_pad($i, 2, 0, STR_PAD_LEFT)."</td>";
                    echo "<td>".strtoupper($value[0])."</td>";
                    echo "<td>".$value[1]."</td>";
                    echo "<td>".$value[2]."</td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </table>
</body>
</html>