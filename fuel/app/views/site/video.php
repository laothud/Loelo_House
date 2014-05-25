<?php foreach ($videos as $video): ?>
<div class="row">
    <div class="large-10 columns">
        <p class="videothumb"><a href="videodetail/<?= $video->id ?>"><img class="th" src="http://localhost:9999/site/public/img/video_thumb.png"></a></p>
        <h2><a href="videodetail/<?= $video->id ?>">Loelo House episode <?= $video->id ?></a></h2>
        <p class="videodescript">Loelo house is a parody of a actual gaming house.</p>
    </div>
</div>
<?php endforeach; ?>