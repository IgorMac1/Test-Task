<div class="user-info">
    <?php
    if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
        echo ucfirst($_SESSION['name']) . '<br>' . $_SESSION['email'] . '<hr>';
    }
    ?>
</div>
<div class="log-out">
    <form action="" method="post"><input name="logOut" type="submit" value="Log Out"></form>
</div>