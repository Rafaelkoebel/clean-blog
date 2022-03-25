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
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                <?php foreach($data as $onedata){ ?>

                    <!-- Post preview-->
                    <div>
                        <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><?= $onedata["contact_name"] ?></li>
                        <li class="list-group-item"><?= $onedata["contact_message"] ?></li>
                        </ul>
                    <!-- Divider-->
                    <hr class="my-4" />

                <?php } ?>
                </div>
            </div>
        </div>
        <?php
            include("layout/footer.inc.php");
        ?>
    </body>
</html>
