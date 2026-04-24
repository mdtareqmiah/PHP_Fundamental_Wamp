<?php
    $errname = $erremail = $errweb = $errcomment = $errgender = "";
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
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
            PHP File Handling.
            <span style="float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time: ". date("h:i:sa");
                ?>
            </span>
            <hr>

            <?php
                $createfile = fopen("new.txt", "w");
                $one = "Tareq is not a bad boy. \n He is also a ....\n";
                fwrite($createfile,$one);
                $two= "Hello Tareq bhai.\n";
                fwrite($createfile,$two);


                $ourfile = fopen("new.txt","r") or die("File not Found!!");
                //echo readfile("text.txt");
                //echo fread($ourfile,filesize("text.txt"));
                while(!feof($ourfile)){
                    echo fgets($ourfile)."<br>";
                }
                fclose($ourfile);
            ?>

        </section>
        <section class="footeroption">
            <p>&copy;<?php echo date("Y"); ?> learn with tareq</p>
            <h2>Footer</h2>
        </section>
    </div>
</body>
</html>