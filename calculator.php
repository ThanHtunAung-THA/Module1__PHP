<?php

    if (isset($_GET["sub"])) {
        # code...
        $f = $_GET["f"];
        $s = $_GET["s"];
        $op = $_GET["op"];

        switch ($op) {
            case '+': $result = $f + $s; break;
            case '-': $result = $f - $s; break;
            case '*': $result = $f * $s; break;
            case '/': $result = $f / $s; break;

        }
    }

?>

<form>
    <center>
        <br>
        ANS -> <input type="text" value="<?php echo @$result; ?>" readonly><br><br>
        <br>
        <div>
            First Number <input type="number" name="f" /><br><br>
        </div>
        <div>
            Second Number <input type="number" name="s" /><br><br>
        </div>

        Choose option
        <select name="op" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        <input type="submit" value="Calculate" name="sub">
    </center>
</form>
