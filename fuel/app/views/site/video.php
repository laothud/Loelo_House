<?php foreach ($videos as $video): ?>
<div class="row">
    <div class="large-10 columns">
        <p class="videothumb"><a href="video_detail.html"><img class="th" src="https://i1.ytimg.com/vi_webp/<?= $video->videocode?>/mqdefault.jpg"></a></p>
        <h2><a href="video_detail.html">Loelo House episode <?= $video->id ?></a></h2>
        <p class="videodescript">Loelo house is a parody of a actual gaming house.</p>
    </div>
</div>
<?php endforeach; ?>