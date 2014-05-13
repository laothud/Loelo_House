<form>
  <div class="row">
    <div class="large-12 columns">
  		<h2>Video Upload</h2>
  	<label>Video Embed Code: 
    		<input type="text" placeholder="Video Code"/>
  		</label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <input type="submit" class="button right" value="Add Video">
    </div>
  </div>
</form>

<div class="row">
  <div class="large-12 columns">
    <table>
    	<tr>
    		<th>Video</th>
    		<th>Username</th>
    		<th>Delete</th>
    	</tr>
      <?php foreach ($videos as $video): ?>
        <tr>
          <td><img src="<?= $video->videocode?>"></td>
          <td><input type="text" value="<?= $video->username ?>"></td>
          <td><input type="button" class="button delete_button" value="Delete"></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>