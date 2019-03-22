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
        case "auto":
            echo $dictionary[$input];
            break;
	case "rower":
            echo $dictionary[$input];
            break;
	case "samolot":
            echo $dictionary[$input];
            break;
        default:
            echo "Word not found!";
    }
?></br>
<a href="dict.html">Try again</a></p>

</body>
</html>