<?php       include 'header.php'; ?>
        <?php
            $links = [
                [
                    "title" => "Главная",
                    "href" => "https://www.youtube.com/watch?v=x7CRfL3aXiw&list=PLhqtrZ34-3cYew-CBIbZzVtybwIv3nbnJ",
                    "is_link" => true
                ],

                [
                    "title" => "PHP",
                    "href" => "https://youtu.be/AtTGflZX3Ks",
                    "is_link" => true
                ],

                [
                    "title" => "Функции",
                    "href" => "",
                    "is_link" => false
                ],
            ];
        ?>
                            <ol class="breadcrumb page-breadcrumb">
                                <?php foreach ($links as $link):?>
                                    <?php if ($link['is_link'] == true): ?>
                                <li class="breadcrumb-item"><a href="<?php echo $link['href']; ?>">
                                        <?php echo $link['title']; ?></a></li>
                                    <?php else: ?>
                                <li class="breadcrumb-item active"><?php echo $link['title']; ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ol>
<?php       include 'footer.php'; ?>