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
        <?php foreach ($query as $key => $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><?php echo $item['author']; ?></td>
                <td><?php echo $item['available']; ?></td>
                <td><?php echo $item['pages']; ?></td>
                <td><?php echo $item['isbn']; ?></td>
                <td> <a href="<?php echo $BASE_URL . '/' . 'delete.php?id=' . (int)($key + 1); ?>">
                        <button class="btn-delete">Delete</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>