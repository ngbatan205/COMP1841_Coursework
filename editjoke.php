<?php
try {
    include 'includes/DatabaseConnection.php';

    if (isset($_POST['joketext'])) {

        $sql = 'UPDATE joke SET
                joketext = :joketext
                WHERE id = :id';

        $s = $pdo->prepare($sql);

        $s->bindValue(':joketext', $_POST['joketext']);
        $s->bindValue(':id', $_POST['id']);

        $s->execute();

        header('Location: jokes.php');
        exit();

    } else {

        $id = $_GET['id'];

        $sql = 'SELECT * FROM joke WHERE id = :id';

        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $id);
        $s->execute();

        $joke = $s->fetch();

        $title = 'Edit Joke';

        ob_start();
        include 'templates/editjoke.html.php';
        $output = ob_get_clean();
    }

} catch (PDOException $e) {

    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include 'templates/layout.html.php';