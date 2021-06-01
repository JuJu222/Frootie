<div class="navigationbar">
    <div class="logo">
        <a href="/frootie/index.php"><img src="/frootie/img/Frootie_Logo_Horizontal.png"></a>
    </div>
    <nav>
        <ul id= "Items">
            <li><a href="/frootie/index.php">Home</a></li>
            <li><a href="/frootie/product/product.php">Products</a></li>
            <li><a href="/frootie/order/order.php">Order</a></li>
            <li><a href="/frootie/contact.php">Contact Us</a></li>
            <li><a href="/frootie/user/sign_in.php">Sign In</a></li>
            <li><a href="/frootie/user/register.php">Register</a></li>
            <?php if(isset($_SESSION['name'])) :  ?>
            <li><a href="/frootie/user/log_out.php">Log Out</li>
            <?php endif;?>
        </ul>
    </nav>
     <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
</div>


<script>
    var Items = document.getElementById("Items");

    Items.style.maxHeight = "0px";

    function menutoggle(){
        if(Items.style.maxHeight == "0px"){
            Items.style.maxHeight = "200px";
        }
        else{
            Items.style.maxHeight = "0px";
        }
    }
</script>