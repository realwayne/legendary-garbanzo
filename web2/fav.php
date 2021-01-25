<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        if (isset($_POST["username"])){
            
            if (!empty($_POST["color"]) && !empty($_POST["dish"])){
                $color = $_POST["color"];
                $dish = $_POST["dish"];

                echo("<h3>You really enjoy $dish especially with a nice $color wine</h3>");
            }else{
                echo("You didn't enjoy the meal");
            }
        }

        
    ?>
</body>
</html>