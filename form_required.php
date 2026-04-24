<?php
    $errname = $erremail = $errweb = $errcomment = $errgender = "";

    $name = $email = $website = $comment = $gender = "";


                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    if(empty($_POST["name"])){
                        $errname = "<span style='color:red'>Name is required.</span>";
                    }
                    else{
                        $name = validate($_POST["name"]);
                    }

                    if(empty($_POST["email"])){
                        $erremail = "<span style='color:red'>E-mail is required.</span>";
                    }
                    else{
                        $name = validate($_POST["email"]);
                    }

                    if(empty($_POST["website"])){
                        $errweb = "<span style='color:red'>Website is required.</span>";
                    }
                    else{
                        $name = validate($_POST["website"]);
                    }

                    if(empty($_POST["gender"])){
                        $errgender = "<span style='color:red'>Gender is required.</span>";
                    }
                    else{
                        $name = validate($_POST["gender"]);
                    }
                    //$name = validate($_POST["name"]);
                    //$email = validate($_POST["email"]);
                    //$web = validate($_POST["website"]);
                    $comment = validate($_POST["comment"]);
                   // $gender = validate($_POST["gender"]);

                    
                }
                
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
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>Header</h2>
        </section>
        <section class="maincontent">
            <hr>
            PHP Form Validation
            <hr>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <table>
                    <p style="color:red">* required filled</p>
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="name" id="">*<?php echo $errname; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail </td>
                        <td><input type="text" name="email" id="">*<?php echo $erremail; ?></td>
                    </tr>
                    <tr>
                        <td>Website </td>
                        <td><input type="text" name="website" id="">*<?php echo $errweb; ?></td>
                    </tr>
                    <tr>
                        <td>Comment </td>
                        <td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            *<?php echo $errgender; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="" value="submitt"></td>
                    </tr>
                </table>
            </form>
            <?php
                // $name = $email = $website = $comment = $gender = "";


                // if($_SERVER["REQUEST_METHOD"]=="POST"){
                //     if(empty($_POST["name"])){
                //         $errname = "<span style='color:red'>Name is required.</span>";
                //     }
                //     else{
                //         $name = validate($_POST["name"]);
                //     }

                //     if(empty($_POST["email"])){
                //         $erremail = "E-mail is required.";
                //     }
                //     else{
                //         $name = validate($_POST["email"]);
                //     }

                //     if(empty($_POST["website"])){
                //         $errweb = "Website is required.";
                //     }
                //     else{
                //         $name = validate($_POST["website"]);
                //     }

                //     if(empty($_POST["gender"])){
                //         $errgender = "Gender is required.";
                //     }
                //     else{
                //         $name = validate($_POST["gender"]);
                //     }
                //     //$name = validate($_POST["name"]);
                //     //$email = validate($_POST["email"]);
                //     //$web = validate($_POST["website"]);
                //     $comment = validate($_POST["comment"]);
                //    // $gender = validate($_POST["gender"]);

                //     echo "Name: $name <br>";
                //     echo "E-mail: $email <br>";
                //     echo "Website: $web <br>";
                //     echo "comment: $comment <br>";
                //     echo "Gendr: $gender <br>";
                // }
                function validate($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>

        </section>
        <section class="footeroption">
            <h2>Footer</h2>
        </section>
    </div>
</body>
</html>