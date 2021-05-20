<?php
include "order_controller.php";

$data = readDataWithId($_GET["order_id"]);
?>
    <form method="POST" action="order_update.php?order_id=<?= $_GET["order_id"] ?>">
        <label>Message
            <textarea name="message"><?= $data["message"] ?></textarea>
        </label>
        <br>
        <input type="submit" name="submit">
    </form>

<?php
    if (isset($_POST['submit'])) {
        updateData($_GET['order_id'], $_POST['message']);
        header("Location: order.php");
}
