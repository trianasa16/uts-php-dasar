<?php

$mahasiswa = [
    ['nim' => 'D212111001', 'nama' => 'Aliftia Radianti Taniasari', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111003', 'nama' => 'Dasimah Seftiani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111005', 'nama' => 'Dewi Yulianti', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111007', 'nama' => 'Ikhlas Wandana', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111009',	'nama' => 'Islah Nurhasanah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111011',	'nama' => 'M Rivaldi Hafizd Fathurohman', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111013', 'nama' => 'Renaldi Irawan', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111015',	'nama' => 'Rudi Loilatu', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111017', 'nama' => 'Sephia Sumi Jaya Tiningrum', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111019', 'nama' => 'Siti Rismawati', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111021', 'nama' => 'Triana Siti Aryani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111023', 'nama' => 'Ajeng Aprilyani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111025', 'nama' => 'Aspiya Huwaida', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111029',	'nama' => 'Ineu Rahmawati', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111031',	'nama' => 'Siti Nur Rohimah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111033',	'nama' => 'Novita Qadariah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111035',	'nama' => 'Zaltin', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa NIM Ganjil</title>
    <!--tambahan class-->
    <style>
        .highlight {
            background-color: #d0e7ff;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Data Nilai Mahasiswa Komputerisasi Akuntansi - 2021</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
        </tr>
        <!-- Kerjakan di line ini -->
        <?php 
        $no = 1;
        foreach ($mahasiswa as $mhs) {
           if ($mhs['nim'] === 'D212111021') {
            echo "<tr class= 'highlight'";
           }
           else {
            echo "<tr>";
           }
                echo "<tr>";
                echo "<td class='center'>" . $no++ . "</td>";
                echo "<td class='center'>" . $mhs['nim'] . "</td>";
                echo "<td>" . $mhs['nama'] . "</td>";
                echo "<td>" . $mhs['jurusan'] . " - " . $mhs['angkatan'] . "</td>";
                echo "<td class='center'>" . $mhs['nilai'] . "</td>";
                echo "</tr>";
        }
         ?>
    </table>
</body>
</html>
