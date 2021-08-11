<?php       include 'header.php'; ?>
    <?php
        $people = [
            [
                "nick" => "Sunny",
                "name" => "Sunny A.",
                "img" => "sunny.png",
                "profession" => "UI//UX Expert",
                "position" => "Lead Author",
                "twitter" => "@myplaneticket",
                "email" => "myorange"
            ],
            [
                "nick" => "Jos",
                "name" => "Jos K.",
                "img" => "josh.png",
                "profession" => "ASP.NET Developer",
                "position" => "Partner &amp; Contributor",
                "twitter" => "@atlantez",
                "email" => "Walapa"
            ],
            [
                "nick" => "Jovanni",
                "name" => "Jovanni L.",
                "img" => "jovanni.png",
                "profession" => "PHP Developer",
                "position" => "Partner &amp; Contributor",
                "twitter" => "@lodev09",
                "email" => "lodev09"
            ],
            [
                "nick" => "Jos",
                "name" => "Roberto R.",
                "img" => "roberto.png",
                "profession" => "Rails Developer",
                "position" => "Partner &amp; Contributor",
                "twitter" => "@sildur",
                "email" => "sildur"
            ]
        ];
    ?>
        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            <?php foreach ($people as $human): ?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?php echo ($human["img"]); ?>" alt="<?php echo ($human["name"]); ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo ($human["name"]); ?> (<?php echo ($human["profession"]); ?>)
                                        <small class="m-0 fw-300">
                                            <?php echo ($human["position"]); ?>
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/<?php echo ($human["twitter"]); ?>" class="text-info fs-sm" target="_blank"><?php echo ($human["twitter"]); ?></a> -
                                    <a href="https://wrapbootstrap.com/user/<?php echo ($human["email"]); ?>" class="text-info fs-sm" target="_blank" title="Contact <?php echo ($human["nick"]); ?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>

                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
            <?php endforeach; ?>
        </div>
<?php       include 'footer.php'; ?>