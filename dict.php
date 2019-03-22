<!DOCTYPE html>
<html>
<body>

<p>Result: <?php 

    $dictionary = array(
        "auto"=>"car",
        "rower"=>"bicycle",
        "samolot"=>"plane");

    $input = $_POST["input"];

    switch ($input) {
        case "auto", "rower", "samolot":
            echo $dictionary[$input];
            break;
        default:
            echo "Word not found!";
    }
?></p>

</body>
</html>