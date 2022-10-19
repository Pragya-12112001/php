<!-- print_r is inbuilt function in php used to print all the values of an array -->
<html>
    <body>
        <?php

        $color =['red',20,'green',12.50];

        // echo  $color[0].'<br>';
        // echo  $color[1].'<br>';
        // echo  $color[2].'<br>';
        // echo  $color[3].'<br>';

        // pre tag prints array as it is 
        // echo '<pre>';
        // print_r($color);
        // echo '</pre>';


        //for loop


        for ($i=0; $i < 4; $i++) { 
            echo  $color[$i]."<br>";         
     }


        echo '<ul>';
        for ($i=0; $i < 4; $i++) { 
            echo "<li> $color[$i]</li>";         
     }
     echo '</ul>';

        ?>
    </body>
</html>