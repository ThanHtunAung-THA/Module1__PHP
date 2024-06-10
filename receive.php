<?php

?>

<body bgcolor="gold">
    <center>
        <h1>Order Form</h1><br>
        <p>Food name</p>
        <input type="text" name="food" readonly
        value="<?php echo$_POST['food']; ?>"
        /><br>
        <p>Price</p>
        <input type="text" name="price" readonly
        value="<?php echo$_POST['price']; ?>"
        /><br>
        <p>Phone</p>
        <input type="text" name="phone" readonly
        value="<?php echo$_POST['phone']; ?>"
        /><br>
        <p>Address</p>
        <input type="text" name="address" readonly
        value="<?php echo$_POST['address']; ?>"
        /><br><br>
        </form>
        </center>
</body>