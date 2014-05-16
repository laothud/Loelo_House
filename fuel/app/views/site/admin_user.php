<form method="post">
  <div class="row">
    <div class="large-12 columns">
  		<h2>Add User</h2>
		<label>Username: 
    		<input name="username" type="text" placeholder="Username"/>
  		</label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      	<label>Password: 
    		<input name="password" type="text" placeholder="Password"/>
  		</label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
        <label>Quote: 
        <input name="quote" type="text" placeholder="Something witty"/>
      </label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <input type="submit" class="button right" value="Add User">
    </div>
  </div>

</form>

<div class="row">
	<div class="large-12 columns">
    <table class="large-12 columns">
    	<tr>
    		<th>Username</th>
    		<th>New Password</th>
        <th>Old Password</th>
    		<th>Update</th>
    		<th>Delete</th>
    	</tr>

    	<?php foreach ($users as $user): ?>
        <?= Form::open(['action' => 'admin_user_update']) ?>
        <tr>
          <td><input name="updateusername" type="text" value="<?= $user->username ?>"></td>
          <td><input name="updatepassword" type="password" value="" placeholder="new password"></td>
          <td><input name="oldpassword" type="password" value="" placeholder="old password"></td>
          <td><input type="submit" class="button" value="Update"></td>
          <td><a href="admin_user_delete/<?= $user->username ?>" class="button delete_button">Delete</a></td>
        </tr>
        <?= Form::close() ?>
      <?php endforeach; ?>
    </table>
  </div>
</div>