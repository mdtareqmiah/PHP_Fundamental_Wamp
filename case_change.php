<?php
    $errname = $erremail = $errweb = $errcomment = $errgender = "";
    session_start();           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
    <style>
        .phpcoding{width: 100%; background: #bbf; margin: 0 auto; padding: 20px; min-height: 600px;}
        .headeroption, .footeroption{background: #000; color: #fff; text-align: center; padding: 20px;}
        .headeroption h2, .footeroption h2{ margin: 0;}
        .maincontent{ min-height: 500px; padding: 20px;}
        p{margin: 0;}
        input[type="text"]{width: 400px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>Header</h2>
        </section>
        <section class="maincontent">
            <hr>
            PHP Case Change.
            <span style="float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time: ". date("h:i:sa");
                ?>
            </span>
            <hr>
            <?php
                if(isset($_POST['text'])){
                    global $txt;
                    $txt = $_POST['text'];
                    //echo strtoupper($txt);
                    //echo strtolower($txt);
                    //echo ucfirst($txt);
                    echo ucwords($txt);

                }
            ?>
            <form action="case_change" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
                <input type="submit" value="submit">
            </form>
            


        </section>
        <section class="footeroption">
            <p>&copy;<?php echo date("Y"); ?> learn with tareq</p>
            <h2>Footer</h2>
        </section>
    </div>
</body>
</html>