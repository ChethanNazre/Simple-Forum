<?php require "../includes/header.php"; ?>
<?php require_once "../config/config.php"; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $select = $conn->prepare("SELECT * FROM topics WHERE id = :id");
    $select->bindParam(':id', $id, PDO::PARAM_INT);
    $select->execute();
    $topic = $select->fetch(PDO::FETCH_OBJ); // You missed this line

    if (!$topic || $topic->user_name !== $_SESSION['username']) {
        header("Location: " . APPURL);
        exit;
    } else {
        $deleteTopic = $conn->prepare("DELETE FROM topics WHERE id = :id");
        $deleteTopic->bindParam(':id', $id, PDO::PARAM_INT);
        $deleteTopic->execute();

        header("Location: " . APPURL);
        exit;
    }
}

?>