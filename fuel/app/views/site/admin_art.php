<?= Form::open(['action' => 'admin_art_newart']) ?>
  <div class="row">
    <div class="large-12 columns">
  		<h2>Art Upload</h2>
		<label>Art URL: 
    		<input name="artcode" type="text" placeholder="Art Url"/>
  		</label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <input type="submit" class="button right" value="Add Art">
    </div>
  </div>
<?= Form::close() ?>

<div class="row">
	<div class="large-12 columns">
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
          <td><a href="admin_art_delete/<?= $art->id ?>" class="button delete_button">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>