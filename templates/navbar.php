<div class="navigationbar">
    <div class="logo">
        <a href="/~ucweb3/frootie/index.php"><img src="/~ucweb3/frootie/img/Frootie_Logo_Horizontal.png"></a>
    </div>
    <nav>
        <ul id= "Items">
            <li><a href="/~ucweb3/frootie/index.php">Home</a></li>
            <li><a href="/~ucweb3/frootie/product/product.php">Products</a></li>
            <li><a href="/~ucweb3/frootie/order/order.php">Orders</a></li>
            <li><a href="/~ucweb3/frootie/contact.php">Contact Us</a></li>
            <?php
//            error_reporting(0);
//            enable ini kalau sudah selesai

            session_start(); 
            ?>
            <?php
            if (isset($_SESSION['name'])) { 
                $name = $_SESSION['name']; 
                if ($_SESSION['status'] == 'admin') {?>
                <li><a href="/~ucweb3/frootie/user/user_edit.php">Users</a></li>
                <?php }?>
            <li><a href="/~ucweb3/frootie/user/log_out.php">Log Out</a></li>
            <?php } else { ?>
            <li><a href="/~ucweb3/frootie/user/sign_in.php">Sign In</a></li>
            <?php } ?>
        </ul>
    </nav>
     <img src="/~ucweb3/frootie/img/menu.png" class="menu-icon" onclick="menutoggle()">
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