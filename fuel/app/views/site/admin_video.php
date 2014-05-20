<?= Form::open(['action' => 'admin_video_newvideo']) ?>
  <div class="row">
    <div class="large-12 columns">
  		<h2>Video Upload</h2>
  	<label>Video Embed Code: 
    		<input name="videocode" type="text" placeholder="Video Code"/>
  		</label>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <input type="submit" class="button right" value="Add Video">
    </div>
  </div>
<?= Form::close() ?>

<div class="row">
  <div class="large-12 columns">
    <table class="large-12 columns">
    	<tr>
    		<th>Video</th>
    		<th>Username</th>
    		<th>Delete</th>
    	</tr>
      <?php foreach ($videos as $video): ?>
        <tr>
          <td><img src="https://i1.ytimg.com/vi_webp/<?= $video->videocode?>/mqdefault.webp"></td>
          <td><input type="text" value="<?= $video->username ?>"></td>
          <td><a href="admin_video_delete/<?= $video->id ?>" class="button delete_button">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>