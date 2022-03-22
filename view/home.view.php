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
        <?php
            //var_dump($data);
            /* foreach($data as $onedata){
                var_dump($onedata);
            } */
        ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                <?php foreach($data as $onedata){ ?>

                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.php">
                            <h2 class="post-title"><?= $onedata["post_title"]?></h2>
                        </a>
                        <h3 class="post-subtitle"><?= $onedata["post_content"] //substr($onedata["post_content"], 0, 200)?> [...]</h3>
                        <p class="post-meta">
                            Posté par
                            <a href="#!"><?= $onedata["display_name"]?></a>
                            le <?= $onedata["post_date"]?>
                            <br>
                            classé dans <b><?=$onedata["cat_descr"] ?></b>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                <?php } ?>
                

                    
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <?php
            include("layout/footer.inc.php");
        ?>
    </body>
</html>
