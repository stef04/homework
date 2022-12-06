<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel= "stylesheet" href="style.css" />
</head>
<body>

    <div class="flex=container">

        <div class="header">
             <?php include 'logo.inc.php' ?>
             <?php include 'menu.inc.php' ?>
             <?php include 'index.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?> </h1>

             <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="/img/php.jpg"';
                    ?>
                    </div>

                    <div class="fullname">
                        <p> My name is
                            <?php echo $name, ' ', $surname . '<br>';
                                echo 'city', ' ', $city; ?>
                                </p>

                                <p> I am
                                <?php echo $age; ?>
                                years old </p>
                                <p> We have learned how to create variables </p>
                                <p> We have studied simple operations with them </p>
                            </div>
                        </div>

                        <div class="knowledge">

                            <?php include 'knowledge.inc.php'; ?>
                            <?php
                            echo $a, ' ', $b, ' ', $c;
                            ?> <br>

                            <?php
                            $a = 10;
                            $b = 30;
                                
                                echo $c;
                            ?> <br>
                             <?php
                                echo $d;
                            ?>
                        
            </div>

            <div class="article">
                <p class="text">
                    Some text
                    and text
                    and again
                </p>
            </div>
        </div>

         <?php include 'footer.inc.php' ?>


    </div>
</body>
</html>