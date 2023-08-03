<?php
require "../../config/config_database.php";
koneksi (hostname, username,password, database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <?php
    $query = $db->query("SELECT * FROM nama");
    ?>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>alamat</th>
            <th>wali</th>
            <th>NIS</th>
        </tr>

        </thead>
        <tbody>
            <?php
            $no = 1; 
            while($row = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['asrama'];?></td>
                    <td><?php echo $row['wali'];?></td>
                    <td>edit | hapus</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
       
    </table>
    
</body>
</html>