<?php
include 'koneksi.php';

$keyword = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM buku WHERE judul LIKE ? OR penulis LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%$keyword%";
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();

$result = $stmt->get_result();
?>

<form method="GET">
    <input type="text" name="search" placeholder="Cari judul / penulis..." value="<?= htmlspecialchars($keyword) ?>">
    <button type="submit">Cari</button>
</form>

<h3>Daftar Buku</h3>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row['judul']) ?></td>
        <td><?= htmlspecialchars($row['penulis']) ?></td>
        <td><?= $row['tahun_terbit'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
