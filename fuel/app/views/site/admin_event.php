<form>
  <div class="row">
    <div class="large-12 columns">
  		<h2>Events</h2>
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
    		<th>Title</th>
    		<th>Description</th>
    		<th>Update</th>
    		<th>Delete</th>
    	</tr>

      <?php foreach ($events as $event): ?>
        <tr>
          <td><input type="text" value="<?= $event->title ?>"></td>
          <td><textarea><?= $event->description ?></textarea></td>
          <td><input type="button" class="button" value="Update"></td>
          <td><input type="button" class="button delete_button" value="Delete"></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>