<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
    <h1>Data Master Barang</h1>
    <h4> <a href=tambah.php>Tambah Barang</a></h4>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th>
</tr>

<?php
    include("koneksi.php");
    $sql="SELECT * FROM penjualan";
    $query = mysqli_query($db, $sql);

    while($penjualan=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$penjualan['id']."</td>";
        echo "<td>".$penjualan['nama']."</td>";
        echo "<td>".$penjualan['stok']."</td>";
        echo "<td>".$penjualan['harga']."</td>";
        echo"<td>";
        echo "<a href='edit-barang.php?id=".$penjualan['id']."'>Edit</a> |";
        echo "<a href='hapus-barang.php?id=".$penjualan['id']."'>hapus</a>";
        echo "</td>";
    echo "</tr>";

    }
    ?>
    </table>
</body>
</html>
    