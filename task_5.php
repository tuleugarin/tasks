<?php       include 'header.php'; ?>
    <?php
        $people = [
            [
                "img" => "img/demo/authors/sunny.png",
                "img_alt" => "Sunny A.",
                "name" => "Sunny A. (UI/UX Expert)",
                "job_title" => "Lead Author",
                "twitter_link_href" => "https://twitter.com/@myplaneticket",
                "twitter_link_text" => "@myplaneticket",
                "email_link_href" => "https://wrapbootstrap.com/user/myorange",
                "email_link_text" => '<i class="fal fa-envelope"></i>',
                "email_link_title" => "Contact Sunny"
            ],
            [
                "img" => "img/demo/authors/josh.png",
                "img_alt" => "Jos K.",
                "name" => "Jos K. (ASP.NET Developer)",
                "job_title" => "Partner &amp; Contributor",
                "twitter_link_href" => "https://twitter.com/@atlantez",
                "twitter_link_text" => "@atlantez",
                "email_link_href" => "https://wrapbootstrap.com/user/Walapa",
                "email_link_text" => '<i class="fal fa-envelope"></i>',
                "email_link_title" => "Contact Jos"
            ],
             [
                "img" => "img/demo/authors/jovanni.png",
                "img_alt" => "Jovanni Lo",
                "name" => "Jovanni L. (PHP Developer)",
                "job_title" => "Partner &amp; Contributor",
                "twitter_link_href" => "https://twitter.com/@lodev09",
                "twitter_link_text" => "@lodev09",
                "email_link_href" => "https://wrapbootstrap.com/user/lodev09",
                "email_link_text" => '<i class="fal fa-envelope"></i>',
                "email_link_title" => "Contact Jovanni"
            ],
             [
                "img" => "img/demo/authors/roberto.png",
                "img_alt" => "Roberto R.",
                "name" => "Roberto R. (Rails Developer)",
                "job_title" => "Partner &amp; Contributor",
                "twitter_link_href" => "https://twitter.com/@sildur",
                "twitter_link_text" => "@sildur",
                "email_link_href" => "https://wrapbootstrap.com/user/sildur",
                "email_link_text" => '<i class="fal fa-envelope"></i>',
                "email_link_title" => "Contact Roberto"
            ]
        ];
    ?>
        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            <?php foreach ($people as $human): ?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
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