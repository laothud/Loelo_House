<form>
      <div class="row">
        <div class="large-12 columns">
      		<h2>Blog Post</h2>
    		<label>Title: 
        		<input type="text" placeholder="Title"/>
      		</label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Description: 
            <textarea></textarea>
          </label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <input type="submit" class="button right" value="Post">
        </div>
      </div>

    </form>

    <div class="row">
    	<div class="large-12 columns left">
		    <table class="large-12 columns">
		    	<tr>
		    		<th>Username</th>
		    		<th>Title</th>
		    		<th>Description</th>
		    		<th>Update</th>
		    		<th>Delete</th>
		    	</tr>

          <?php foreach ($posts as $post): ?>
  		    	<tr>
  		    		<td><input type="text" value="<?= $post->username ?>"></td>
  		    		<td><input type="text" value="<?= $post->title ?>"></td>
  		    		<td><textarea><?= $post->description ?></textarea></td>
  		    		<td><input type="button" class="button" value="Update"></td>
  		    		<td><input type="button" class="button delete_button" value="Delete"></td>
  		    	</tr>
          <?php endforeach; ?>
		    </table>
		</div>
	</div>