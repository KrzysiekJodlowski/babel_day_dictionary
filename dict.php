<!DOCTYPE html>
<html>
<body>

<p>Result: <?php 

    $dictionary = array(
        "auto"=>"car",
        "rower"=>"bicycle",
        "samolot"=>"plane");

    $input = $_POST["input"];

    if ($dictionary[$input]) {
	    echo $dictionary[$input];
    } else {
	    echo "Word not found!";
    }
?></br>
<a href="dict.html">Try again</a></p>

</body>
</html>