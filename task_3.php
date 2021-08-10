<?php       include 'head.php' ?>
        <?php
            $way = [ "Главная", "PHP", "Функции" ];
        ?>
              <?php foreach ($way as $road):?>
                            <ol class="breadcrumb page-breadcrumb">

                                <li class="breadcrumb-item"><a href="#">1111</a></li>
                                <li class="breadcrumb-item"><a href="#">PHP</a></li>
                                <li class="breadcrumb-item active">222</li>

                            </ol>
 <?php endforeach; ?>
<?php       include 'footer.php' ?>