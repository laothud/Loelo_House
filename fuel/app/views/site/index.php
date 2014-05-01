  	<div class="row CTA">
        <div class="large-12 columns">
            <div id="display">
              <div>
                <a href="" id="back" class="left"><img src="img/arrow.png" border="0"/></a>
                <a href="video_detail.html"><img id="displayImg" src="img/CTA/1.png"/></a>
                <a href="" id="next" class="right"><img src="img/arrow2.png" border="0"/></a>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
        <p class="CTA_caption">Welcome to the Loelo House site</p>
    </div>

    <div class="row">
        <div class="large-8 columns">
            <?php foreach ($posts as $post): ?>
            <h2 class"blogtitle"><a href="blog_detail.html"><?= $post->title ?></a></h2>
            <p class="blogdescription"><?= $post->description ?><a href="blog_detail.html"> Read Me...</a></p>
            <p class="blogauthor">Date created: <?= $post->created_at ?>   Author: <?= $post->username ?></p>
            <?php endforeach; ?>
        </div>
        <div class="large-4 columns">
            <h1 class="header_section">Cast</h1>
            <?php foreach ($users as $user): ?>
            <a href="#"><img class="th" src="img/temp_member.png" style="float:left; margin-right:5px;"></a>
            <h3 class="playername"><?= $user->name ?></h3>
            <p class="quote"><?= $user->quote ?></p>
            <?php endforeach; ?>
        </div>
    </div>