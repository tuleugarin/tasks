<?php include 'header.php'; ?>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
        $sql = "SELECT * FROM lists";
        $statment = $pdo -> prepare($sql);
        $statment -> execute();
        $lists = $statment ->fetchAll(PDO::FETCH_ASSOC);
    ?>
            <h5 class="frame-heading">
                Обычная таблица
            </h5>
            <div class="frame-wrap">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lists as $list): ?>
                        <tr>
                            <th scope="row"><?php echo ($list["id"]); ?></th>
                            <td><?php echo ($list["First Name"]); ?></td>
                            <td><?php echo ($list["Last Name"]); ?></td>
                            <td><?php echo ($list["Username"]); ?></td>
                            <td>
                                <a href="show.php?id=<?php echo ($list["id"]); ?>" class="btn btn-info">Редактировать</a>
                                <a href="edit.php?id=<?php echo ($list["id"]); ?>" class="btn btn-warning">Изменить</a>
                                <a href="delete.php?id=<?php echo ($list["id"]); ?>" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<?php include 'footer.php'; ?>