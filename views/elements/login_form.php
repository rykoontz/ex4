<form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

<fieldset>
<legend>Log In</legend>
<label for="username">Username/E-mail Address: <?=REQFIELD?></label>
<input type="text" id="email" name="email" value="<?=$_POST['email']?>" maxlength="75" required="username" />
<br />
            
<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?=$_POST['password']?>" maxlength="15" required="password" />
<br />

<button id="submit" type="submit" class="btn btn-primary" >Log In</button>
</fieldset>
</form>