<?php
require __DIR__ . '/../config/db.php';

// Ambil daftar tugas dari database
$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>To-Do List</h1>

    <!-- Kotak sambutan -->
    <div class="content-box">
        <h2>Selamat Datang!</h2>
        <p>Gunakan aplikasi ini untuk mengatur tugas harian Anda dengan gaya modern Jepang. Tandai tugas yang sudah selesai, edit jika perlu, dan kelola waktu Anda dengan lebih efisien.</p>
    </div>

    <!-- Form untuk menambah tugas -->
    <form action="add.php" method="POST">
        <input type="text" name="title" placeholder="Tambah tugas baru" required>
        <button type="submit">Tambah</button>
    </form>

    <!-- Daftar tugas -->
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <form action="checklist.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <input type="checkbox" <?= $task['is_completed'] ? 'checked' : '' ?> 
                           onChange="this.form.submit()">
                </form>
                <span class="<?= $task['is_completed'] ? 'completed' : '' ?>">
                    <?= htmlspecialchars($task['title']) ?>
                </span>
                <a href="../edit.php?id=<?= $task['id'] ?>">Edit</a>
                <a href="../delate.php?id=<?= $task['id'] ?>" onclick="return confirm('Hapus tugas ini?')">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
