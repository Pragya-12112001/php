<html>
    <!-- stores info about header path and script location -->
    <body>
        <?php
        echo $_SERVER['PHP_SELF']."<br>";
        echo $_SERVER['SERVER_NAME']."<br>";
        echo $_SERVER['HTTP_HOST']."<br>";
        echo $_SERVER['HTTP_USER']."<br>";
        echo $_SERVER['SCRIPT_NAME']."<br>";
        ?>
    </body>
</html>