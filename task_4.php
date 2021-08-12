<?php       include 'header.php'; ?>
    <?php
        $counters = [
            [
                "title" => "My Tasks",
                "indicators" => "130 / 500",
                "color" => "bg-fusion-400",
                "width" => "65%",
                "valuenow" => "65",
                "valuemin" => "0",
                "valuemax" => "100"
            ],
            [
                "title" => "Transfered",
                "indicators" => "440 TB",
                "class" => "bg-success-500",
                "width" => "34%",
                "valuenow" => "34",
                "valuemin" => "0",
                "valuemax" => "100"
            ],
            [
                "title" => "Bugs Squashed",
                "indicators" => "77%",
                "class" => "bg-info-400",
                "width" => "77%",
                "valuenow" => "77",
                "valuemin" => "0",
                "valuemax" => "100"
            ],
            [
                "title" => "User Testing",
                "indicators" => "7 days",
                "class" => "bg-primary-300",
                "width" => "84%",
                "valuenow" => "84",
                "valuemin" => "0",
                "valuemax" => "100"
            ]
        ];
    ?>
                    <?php foreach ($counters as $counter): ?>

                            <div class="d-flex mt-2">
                                <?php echo $counter["title"]; ?>
                                <span class="d-inline-block ml-auto"><?php echo $counter["indicators"]; ?></span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar <?php echo $counter["class"]; ?>" role="progressbar" style="width: <?php echo $counter["width"]; ?>;" aria-valuenow="<?php echo $counter["valuenow"]; ?>" aria-valuemin="<?php echo $counter["valuemin"]; ?>" aria-valuemax="<?php echo $counter["valuemax"]; ?>">
                                </div>
                            </div>


                    <?php endforeach; ?>

<?php       include 'footer.php'; ?>