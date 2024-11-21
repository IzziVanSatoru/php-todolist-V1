<?php
require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Ambil status saat ini dari database
    $stmt = $pdo->prepare("SELECT is_completed FROM tasks WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $task = $stmt->fetch(PDO::FETCH_ASSOC);

    // Balik status is_completed
    $newStatus = $task['is_completed'] ? 0 : 1;

    // Perbarui status di database
    $stmt = $pdo->prepare("UPDATE tasks SET is_completed = :is_completed WHERE id = :id");
    $stmt->execute(['is_completed' => $newStatus, 'id' => $id]);

    // Redirect kembali ke halaman utama
    header("Location: index.php");
    exit;
}
?>
