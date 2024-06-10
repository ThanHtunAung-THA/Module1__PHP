<?php
    if (isset($_GET["sub"])) {
        
        if (empty($_GET["n"])) {
            echo "please, fill name.";
        }
        else if (strlen($_GET["n"])> 15) {
            echo "please, fill name in 15 characters.";
        }
        else {
            echo "Welcome ".$_GET["n"];
        }
    }
?>

<form>
    Enter your name<input type="text" name="n"/>
    <input type="submit" name="sub" value="show my name" />
</form>
