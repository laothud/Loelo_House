<?= Form::open(['action' => 'admin_post_newpost']) ?>
      <div class="row">
        <div class="large-12 columns">
      		<h2>Blog Post</h2>
    		<label>Title: 
        		<input name="title" type="text" placeholder="Title"/>
      		</label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Description: 
            <textarea name="description" ></textarea>
          </label>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <input type="submit" class="button right" value="Post">
        </div>
      </div>

<?= Form::close() ?>

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
            <?= Form::open(['action' => 'admin_post_update']) ?>
  		    	<tr>
              <input name="updateid" type="hidden" value="<?= $post->id ?>">
  		    		<td><input type="text" value="<?= $post->username ?>"></td>
  		    		<td><input name="updatetitle" type="text" value="<?= $post->title ?>"></td>
  		    		<td><textarea name="updatedescription"><?= $post->description ?></textarea></td>
  		    		<td><input type="submit" class="button" value="Update"></td>
  		    		<td><a href="admin_post_delete/<?= $post->id ?>" class="button delete_button">Delete</a></td>
  		    	</tr>
            <?= Form::close() ?>
          <?php endforeach; ?>
		    </table>
		</div>
	</div>