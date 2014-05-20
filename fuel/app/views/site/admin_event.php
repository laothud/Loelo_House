<?= Form::open(['action' => 'admin_event_newevent']) ?>
  <div class="row">
    <div class="large-12 columns">
  		<h2>Events</h2>
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
	<div class="large-12 columns left">
    <table class="large-12 columns">
    	<tr>
    		<th>Title</th>
    		<th>Description</th>
    		<th>Update</th>
    		<th>Delete</th>
    	</tr>

      <?php foreach ($events as $event): ?>
        <?= Form::open(['action' => 'admin_event_update']) ?>
        <tr>
          <input name="eventid" type="hidden" value="<?= $event->id ?>">
          <td><input name="updatetitle"type="text" value="<?= $event->title ?>"></td>
          <td><textarea name="updatedescription"><?= $event->description ?></textarea></td>
          <td><input type="submit" class="button" value="Update"></td>
          <td><a href="admin_event_delete/<?= $event->id ?>" class="button delete_button">Delete</a></td>
        </tr>
        <?= Form::close() ?>
      <?php endforeach; ?>
    </table>
  </div>
</div>