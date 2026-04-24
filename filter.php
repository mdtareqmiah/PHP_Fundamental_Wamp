<?php
    $errname = $erremail = $errweb = $errcomment = $errgender = "";
    session_start(); 
    setcookie('visited',"",-3600, "/");          
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
            PHP Filters.
            <span style="float:right">
                <?php
                    date_default_timezone_set('Asia/Dhaka');
                    echo "Time: ". date("h:i:sa");
                ?>
            </span>
            <hr>
            <table>
                <tr>
                    <td>Filter name</td>
                    <td>Filter ID</td>
                </tr>
                <?php
                    foreach(filter_list() as $id => $filter){
                        echo '<tr><td>'.$filter.'</td><td>'. filter_id($filter). '</td></tr>';
                    }
                ?>
            </table>
            <?php 
                //define('FILTER_SANITIZE_STRING', 513);
                $str="<h2>Iam Lewarning PHP.</h2>";
                $newstr=filter_var($str, FILTER_SANITIZE_STRING);
                echo $newstr,PHP_EOL;

                $int = "127.0.0.1";

                if(filter_var($int, FILTER_VALIDATE_IP)){
                    
                    echo "<br>$int It is integer value";
                }
                else{
                    echo "It is not integer value";
                }
                
                $mail = "tareqgmail.com";

                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    
                    echo "<br>$mail It is  vALID MAIL";
                }
                else{
                    echo "<br>It is not valid.";
                }
                $url = "tareqgmail.com";

                if(filter_var($url, FILTER_VALIDATE_URL)){
                    
                    echo "<br>$url It is  vALID web";
                }
                else{
                    echo "<br>It is not valid.";
                }

                
            ?>
            <hr>
            Advance Filter.
            <hr>
            <?php 
                $intnum = 300;
                $min=1;
                $max=200;
                if(filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max)))){
                    echo "It is valid.";

                }
                else{
                    "It is not valid.";
                }
                echo "<br>";
                $urls = "http://www.tareq.com";
                if(filter_var($urls, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                    echo "this url is valid.";
                }
                else{
                    echo "is has not querry string.";
                }
            
            ?>


            <?php
                
            ?>
            


        </section>
        <section class="footeroption">
            <p>&copy;<?php echo date("Y"); ?> learn with tareq</p>
            <h2>Footer</h2>
        </section>
    </div>
</body>
</html>