
{videos}
<div class="media">
    <div class="media-left">
        <a href="<?php echo base_url('videos/view/{videoid}') ?>">
            <img class="media-object" src="<?php echo asset_url('img/video_poster')?>/{videoid}.jpg" alt="{title}">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">{title}</h4>
        <h5>Descripción</h5><p>{text}</p>
    </div>
</div>
{/videos}