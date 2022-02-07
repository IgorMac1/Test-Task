<div class="home-button">
    <a href="/"><input type="button" value="Home"></a>
</div>
<form action="" class="ui-form" method="post">
    <h3>Registration</h3>
    <div class="form-row">
        <input name="email" type="text" id="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"]; ?>"
               required autocomplete="off"><label for="email">Email</label>
    </div>
    <div class="form-row">
        <input name="login" type="text" id="login" value="<?php if (isset($_POST["login"])) echo $_POST["login"]; ?>"
               required autocomplete="off"><label for="login">Login</label>
    </div>
    <div class="form-row">
        <input name="name" type="text" id="realName" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"
               required autocomplete="off"><label for="realName">Real
            name</label>
    </div>
    <div class="form-row">
        <input name="pass" type="password" id="password" required autocomplete="off"><label
                for="password">Password</label>
    </div>
    <div class="form-row">
        <input name="confirmPass" type="password" id="password" required autocomplete="off"><label for="password">Confirm
            password</label>
    </div>
    <div class="form-row">
        <input name="birthday" type="date" id="birthDate"
               value="<?php if (isset($_POST["birthday"])) echo $_POST["birthday"]; ?>" required autocomplete="off"
               min="1900-01-01" max='<?= date("Y-m-d") ?>'>
        <label for="birthDate">Birth date</label>
    </div>
    <div class="form-row">
        <select name="country" required>
            <?php
            if (isset($_POST['country']) && $_POST['country'] != '') {
                echo '<option value =\'' . $_POST['country'] . '\'>' . $_POST['country'] . '</option>';
            } else {
                echo '<option value="">choose your country</option>';
            }
            foreach ($country as $country) {
                echo '<option value =\'' . $country['country'] . '\'>' . $country['country'] . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="agree" required>
            Agree with terms and conditions
        </label>
    </div>
    <p><input type="submit" value="Confirm"></p>
    <p><input type="reset" value="Clear"></p>
</form>
