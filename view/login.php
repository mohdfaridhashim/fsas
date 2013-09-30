<h2>Login</h2>
<form action="index.php?r=signin" method="post">
<p>
<font size="3"><?php if(isset($view[0])){ echo $view[0]; }else { ?>  <strong> Enter user ID and password: </strong></font><?php } ?></p>
<table width="100" border="0">
  <tr>
    <td><strong>User ID</strong><br /><input type="text" size="20" name="j_username" /></td>
    <td></td>
  </tr>
  <tr>
    <td><strong>Password </strong><br /><input type="password" size="20" name="j_password" /></td>
    <td></td>
  </tr>
</table>
<p>
  <input type="submit" name="login" value="Login">
</p>

</form>