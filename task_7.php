<?php       include 'header.php'; ?>
    <?php
        $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
        $sql = "SELECT * FROM people";
        $stetment = $pdo->prepare($sql);
        $stetment -> execute();
        $people = $stetment->fetchAll(PDO::FETCH_ASSOC);
    ?>
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            <?php foreach ($people as $human): ?>
                            <div class="<?php echo $human["status"] == "banned" ? "banned" : " "; ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo ($human["img"]); ?>" alt="<?php echo ($human["img_alt"]); ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo ($human["name"]); ?>
                                        <small class="m-0 fw-300">
                                            <?php echo ($human["job_title"]); ?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo ($human["twitter_link_href"]); ?>" class="text-info fs-sm" target="_blank"><?php echo ($human["twitter_link_text"]); ?></a> -
                                    <a href="<?php echo ($human["email_link_href"]); ?>" class="text-info fs-sm" target="_blank" title="<?php echo ($human["email_link_title"]); ?>"><?php echo ($human["email_link_text"]); ?></a>
                                </div>
                            </div>
            <?php endforeach; ?>
                            </div>
<?php       include 'footer.php'; ?>