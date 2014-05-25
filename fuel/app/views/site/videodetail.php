<div class="left" style="
    width: 60%;">
<iframe width="100%" height="50%" src="//www.youtube.com/embed/<?= $thevideo->videocode ?>" frameborder="0" allowfullscreen></iframe>
</div>

<div class="right">
	<h3>Episode List:</h3>
	<?php foreach ($videos as $video): ?>
		<p><a href="../videodetail/<?= $video->id ?>">Episode <?= $video->id ?></a></p>
	<?php endforeach; ?>
</div>