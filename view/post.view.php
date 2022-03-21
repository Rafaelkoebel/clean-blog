        <?php
            include("layout/head.inc.php");
        ?>
    <body>
        <?php
            include("layout/nav.inc.php");
        ?>
        <?php
            include("layout/header.inc.php");
        ?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>
                            <?= $content ?>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <?php
            include("layout/footer.inc.php");
        ?>
    </body>
</html>
