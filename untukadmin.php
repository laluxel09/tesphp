<?php
$data = [
    [
        "nama" => "Hapsari Nur Aini",
        "alamat" => "Karangrejo Gg 1 Buntu No 8",
        "no" => "0881027646840",
        "img" => "orang"
    ],
    [
        "nama" => "Asyam Yanuar Mahardika",
        "alamat" => "Karangrejo Gg 1 Buntu No 8A",
        "no" => "08817078684",
        "img" => "orang"
    ],
    [
        "nama" => "Aswanda Dimas Mahadi",
        "alamat" => "Perumahan Planet Green Sumargo J14",
        "no" => "0318291619",
        "img" => "orang"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Data Siswa (Laman Admin)</h1>
    <table border="1" cellpadding="3" cellspacing="1" width="100%">
        <tr align="center">
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data as $id => $nama) :?>
            <tr align="center">
                <td><?= $id + 1?></td>
                <td><img src="orang.png" width="100" alt="orang"></td>
                <td><?= $nama['nama']?></td>
                <td>
                    <a href="detailadmin.php?nama=<?=$nama["nama"];?>&alamat=<?=$nama["alamat"];
                    ?>&no=<?=$nama["no"];?>&img=<?=$nama["img"]?>">
                    <button>Detail</button>
                    </a>
                </td>
            </tr>

        <?php endforeach?>
    </table>
</body>
</html>