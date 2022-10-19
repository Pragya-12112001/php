<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text"name="fname" placeholder="name"><br><br>
        <input type="text"name="fage" placeholder="age"><br><br>

<input type="submit" name="save" id="">
    </form>


<?php
if(isset($_POST['save'])){
    echo $_POST['fname']."<br>";
    echo $_POST['fage']."<br>";
}

?>