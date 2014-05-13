<form>
      <div class="row">
        <div class="large-12 columns">
      		<h2>Art Upload</h2>
    		<label>Art URL: 
        		<input type="text" placeholder="Art Url"/>
      		</label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <input type="submit" class="button right" value="Add Art">
        </div>
      </div>

    </form>

    <div class="row">
    	<div class="large-12 columns">
		    <table>
		    	<tr>
		    		<th>Image</th>
		    		<th>Username</th>
		    		<th>Delete</th>
		    	</tr>
          <?php foreach ($arts as $art): ?>
            <tr>
              <td><img src="<?= $art->artcode?>"></td>
              <td><input type="text" value="<?= $art->username ?>"></td>
              <td><input type="button" class="button delete_button" value="Delete"></td>
            </tr>
          <?php endforeach; ?>
		    </table>
		</div>
	</div>