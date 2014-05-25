<?php foreach ($events as $event): ?>
    <div class="large-12 columns">
        <h2 class"blogtitle"><?= $event->title ?></h2>
        <p class="blogdescription"><?= $event->description ?></p>
    </div>
<?php endforeach; ?>
