<form>
      <div class="row">
        <div class="large-12 columns">
      		<h2>Add User</h2>
    		<label>Username: 
        		<input type="text" placeholder="Username"/>
      		</label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          	<label>Password: 
        		<input type="text" placeholder="Password"/>
      		</label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
            <label>Quote: 
            <input type="text" placeholder="Something witty"/>
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
		    		<th>Password</th>
            <th>Quote</th>
		    		<th>Update</th>
		    		<th>Delete</th>
		    	</tr>

		    	<?php foreach ($users as $user): ?>
            <tr>
              <td><input type="text" value="<?= $user->username ?>"></td>
              <td><input type="text" value="<?= $user->password ?>"></td>
              <td><input type="text" value="<?= $user->quote ?>"></td>
              <td><input type="button" class="button" value="Update"></td>
              <td><input type="button" class="button delete_button" value="Delete"></td>
            </tr>
          <?php endforeach; ?>
		    </table>
		</div>
	</div>