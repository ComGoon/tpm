<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>he title</h2>


<div class="main">
    <?php
    $conn = mysqli_connect("localhost", "root", "root", "dbTPM");
    if ($conn === false) {
        die("ERROR: Could not display profiles!" . mysqli_connect_error());
    }

    $sql = "SELECT * FROM speakers LIMIT 7";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);


    echo 'num of profile: ' . $numRows;
    if ($numRows > 0) {


        echo "    <ul class=\"cards\">";
        while ($row = mysqli_fetch_array($result)) {
//            echo $row['civilite'] . "<hr>";

            if ($num % 2 == 0){
                $ima = "tpm.jpg";
                $num++;
            }else{
                $ima = "visuel-africup.jpg";
                $num++;
            }
            echo "
        <li class=\"cards_item\">
            <div class=\"card\">
                
                <div class=\"card_image\">
                    <img src=\"$ima\">
                    <div class=\"linkedin\"> 
                         AFRIC'UP 
                    </div>
                </div>
                <div class=\"card_content\">$row[0]
                    <h2 class=\"card_title\">$row[3] $row[1] $row[2]</h2>
                    <p class=\"card_text\">Organisme: $row[10]</p>
                    <button class=\"btn card_btn\">Read More</button>
                </div>
            </div>
        </li>
            
            ";
        }
        echo "    </ul>";
    }
    ?>


</div>

<script src="jquery-3.3.1.slim.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
