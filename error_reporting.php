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
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>Header</h2>
        </section>
        <section class="maincontent">
            <hr>
            PHP Error Handling.
            <span style="float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time: ". date("h:i:sa");
                ?>
            </span>
            <hr>
            <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE |E_NOTICE);
                $price = 45;
                if($pric==45){
                    print "The price is $price";
                }
                else{
                    print "Price is not 45";
                }
            ?>
            <hr>
            PHP Error Exception Handling
            <hr>
            <?php 
                //use switch case
                // Try, Throw, Catch
                function numcheck($num){
                    if($num!=1){
                        throw new Exception("value must be 1 or below");
                        return true;
                    }

                }
                try{
                    numcheck(1);
                    echo "If you see this number is 1 or below.";
                }
                catch(Exception $e){
                    echo "Message: ".$e->getMessage();
                }
            
            ?>


        </section>
        <section class="footeroption">
            <p>&copy;<?php echo date("Y"); ?> learn with tareq</p>
            <h2>Footer</h2>
        </section>
    </div>
</body>
</html>