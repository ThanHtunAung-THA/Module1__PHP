<?php
    if (isset($_GET["sub"])) {
        # code...
        error_reporting(1);
        $color = $_GET["c"];
        echo "<body bgcolor = '$color'>";
        
    }
?>

<body >
<form>
    Select Color
    <select name="c">
        <option value=""><-- Select --></option>
        <option value="#FFB6C1">Light pink</option>
        <option value="red">Red</option>
        <option value="gree">Green</option>
        <option value="skyBlue">skyBlue</option>
        <option value="Gold">Gold</option>
        <option value="#98fb98">pale green</option>
        <option value="#2c2d32">Black</option>
    </select>
    <input type="submit" value="Change color" name="sub" />
</form>
</body>
