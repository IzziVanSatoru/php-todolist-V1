<?php
require __DIR__ . '/config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $task = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$task) {
        die("Task not found.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];

    $stmt = $pdo->prepare("UPDATE tasks SET title = :title WHERE id = :id");
    $stmt->execute(['title' => $title, 'id' => $id]);

    header("Location: public/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
