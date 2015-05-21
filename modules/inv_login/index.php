<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
global $accounts;
?>
<style>
.login{
	float:right;
	clear:both;
}
</style>
<?php LoadJQuery(); ?>
    <script>
	
      $(function ($) {

        $('#inv_loginform').on('submit', function (e) {

          e.preventDefault();
          $.ajax({
            type: 'post',
            url: $('#inv_loginform').attr('action'),
            data: $('#inv_loginform').serialize(),
            success: function (data) {
			if(data==0){
				$(".error").html("<font color='red'>Wrong Username or Password</font>")
			}
			else{
				location.reload();
			}
            }
          });

        });

      });
    </script>
<li>
<?php if(isset($_SESSION['id'])){
	?>
<h4>User Profile</h4>
<ul>
<li class='login'>Username : <?php echo $accounts->Username(); ?></li>
<?php if($accounts->permissions >= 3){ ?>
<!--Admin Roles-->
<li class='login'><a href='./admin/'>Admin Panel</a></li>
<?php } ?>
<?php inv_loginProfileLink(); ?>

</ul>
<form id="inv_loginform" action="<?php echo HOST_URL.'/modules/inv_login/calls.php'; ?>">
<input type="hidden" name="process" id="process" value="logout">
<li><input type="submit" value="Logout"></li>
</form>
</ul>
<?php } 
else { ?>
<h4>Login</h4>
<form id="inv_loginform" action='<?php echo HOST_URL.'/modules/inv_login/calls.php'; ?>'>
<input type='hidden' name='process' id='process' value='login'>
<div class="error"></div>
<ul class='login'><li class='login'>Email:<input type="text" id='email' name='email'></li>
<li class='login'>Password:<input type="password" id='password' name='password'></li>
<li class='login'><input type="submit" value="Login"></li>
</ul>
</form>
<?php } ?>
</li>

