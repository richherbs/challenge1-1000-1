<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 - 1000 - 1</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
    <body>
        <?

        $a=0;

        while($a < 1000){
            if($a % 2 == 0){
                echo "<div class=\"explode\"><div class='text'>$a</div></div>";
            } elseif ($a % 3 == 0){
                echo "<div class=\"blood\"><div class='text'>$a</div></div>";
            } else {
                echo "<div class=\"eagle\"><div class='text'>$a</div></div>";
            }
            $a++;
        }

        while($a >= 0){
            if($a % 2 == 0){
                echo "<div class=\"explode\"><div class='text'>$a</div></div>";
            } elseif ($a % 3 == 0){
                echo "<div class=\"blood\"><div class='text'>$a</div></div>";
            } else {
                echo "<div class=\"eagle\"><div class='text'>$a</div></div>";
            }
            $a--;
        }
        ?>
    </body>
</html>
