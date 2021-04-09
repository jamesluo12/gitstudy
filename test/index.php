<!DOCTYPE html>
<?php 
    session_start();
    $_SESSION['view']=1;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>" . $_SESSION['view'] . "</h1>";
        echo "今天是" . date("Y/m/d") . "<br>"; 
        echo "今天是" . date("Y.m.d") . "<br>"; 
        echo "今天是" . date("l") . "<br>"; 
        $d = mktime(23,59,59,7,5,1997); 
        echo "今天是" . date("Y/m/d h:i:sa", $d) . "<br>";
        $a = strtotime("nest Saturday"); 
        echo "今天是" . date("Y/m/d h:i:sa", $a) . "<br>"; 
        echo "今天是" . date("h:i:sa") . "<br>"; 

        function check($abc){
            if ($abc > 1){
                throw new Exception("must 1");
            }
            return true;
        }
        try{
            check(2);
        }
        catch(Exception $e){
            echo "Message: " . $e->getMessage();
        }
    ?>
</body>
</html>