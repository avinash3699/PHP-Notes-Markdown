<html >

    <head>
        <title>Sum of N numbers</title>
    </head>

    <body>
        
        <form action="Sum+Of+N+Numbers.php" method="POST"> 
            <label for="valueOfN">Enter the Value of N:</label>
            <input type="number" name="N" value="0">
        </form>
        
        <?php
            $n = 0;
            try{
                if (isset($_POST['N'])){
                    $res = 0;
                    $n = $_POST['N'];
                    for($i = 1; $i <= $n; $i++){
                        $res += $i;
                    }
                    echo "Sum of 0 to ", $n, " is ", $res;
                }
            }
            catch (Exception $e){
                echo $e;
            }
        ?>

    </body>

</html>