<?php
    include 'header.php';
?>
        <section class="maincontent">
            <hr>
            PHP Include Required.
            <span style="float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time: ". date("h:i:sa");
                ?>
            </span>
            <hr>

           
            <?php
                require "me.php";
                require "me.php";
                require_once "me.php";
            ?>

        </section>
<?php include 'footer.php' ?>        