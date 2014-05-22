<?= Form::open(['action' => 'user_post_newpost']) ?>
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
            <textarea name="description"></textarea>
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
		<?= Form::open(['action' => 'user_video_newvideo', 'class' => 'left']) ?>
	        <div class="large-12 columns">
	        	<h2>Video Upload</h2>
	          	<label>Youtube embed code: 
	            	<input name="videocode" type="text" placeholder="Embed code here"/>
	          	</label>
	        </div>
		

		  	<div class="large-12 columns">
		      <input type="submit" class="button right" value="Post">
		    </div>
	    <?= Form::close() ?>

	    <?= Form::open(['action' => 'user_art_newart', 'class' => 'right']) ?>
	        <div class="large-12 columns left">
	        	<h2>Art Upload</h2>
	          	<label>Art Url: 
	            	<input name="artcode" type="text" placeholder="URL to art"/>
	          	</label>
	        </div>
		

		  	<div class="large-12 columns">
		      <input type="submit" class="button right" value="Post">
		    </div>
	    <?= Form::close() ?>

    	<div class="large-12 columns left">
    		<h2>Your Posts</h2>
		    <table class="large-12 columns">
		    	<tr>
		    		<th>Username</th>
		    		<th>Title</th>
		    		<th>Description</th>
		    		<th>Update</th>
		    		<th>Delete</th>
		    	</tr>

          <?php foreach ($posts as $post): ?>
          	<?= Form::open(['action' => 'user_post_update']) ?>
  		    	<tr>
  		    		<input name="updateid" type="hidden" value="<?= $post->id ?>">
  		    		<td><input type="text" value="<?= $post->username ?>"></td>
  		    		<td><input name="updatetitle"type="text" value="<?= $post->title ?>"></td>
  		    		<td><textarea name="updatedescription"><?= $post->description ?></textarea></td>
  		    		<td><input type="submit" class="button" value="Update"></td>
  		    		<td><a href="user_post_delete/<?= $post->id ?>" class="button delete_button">Delete</a></td>
  		    	</tr>
  		    <?= Form::close() ?>
          <?php endforeach; ?>
		    </table>
		</div>

		<div class="large-12 columns">
			<h2>Your Art</h2>
		    <table class="large-12 columns">
		    	<tr>
		    		<th>Image</th>
		    		<th>Username</th>
		    		<th>Delete</th>
		    	</tr>
		      <?php foreach ($arts as $art): ?>
		        <tr>
		          <td><img src="<?= $art->artcode?>"></td>
		          <td><input type="text" value="<?= $art->username ?>"></td>
		          <td><a href="user_art_delete/<?= $art->id ?>" class="button delete_button">Delete</a></td>
		        </tr>
		      <?php endforeach; ?>
		    </table>
	  	</div>

	  	<div class="large-12 columns">
	  		<h2>Your Video</h2>
		    <table class="large-12 columns">
		    	<tr>
		    		<th>Video</th>
		    		<th>Username</th>
		    		<th>Delete</th>
		    	</tr>
		      <?php foreach ($videos as $video): ?>
		        <tr>
		          <td><img src="https://i1.ytimg.com/vi/<?= $video->videocode?>/mqdefault.jpg"></td>
		          <td><input type="text" value="<?= $video->username ?>"></td>
		          <td><a href="user_video_delete/<?= $video->id ?>" class="button delete_button">Delete</a></td>
		        </tr>
		      <?php endforeach; ?>
		    </table>
	  	</div>

	</div>