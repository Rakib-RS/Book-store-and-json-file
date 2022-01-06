<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
    ?>
    <form action="./search.php" method="POST">
        <input type="text" name="title">
        <input type="submit" value="Search">
    </form>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
            <th>Option </th>
        </tr>
        <?php foreach ($books as $key => $book) : ?>
            <tr>
                <td><?php echo $book['id']; ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['available']; ?></td>
                <td><?php echo $book['pages']; ?></td>
                <td><?php echo $book['isbn']; ?></td>
                <td> <a href="<?php echo $BASE_URL . '/' . 'delete.php?id=' . (int)($key + 1); ?>">
                        <button class="btn-delete">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <br>
    <br>
    <a href="./create.php"><button>add</button></a>
</body>

</html>