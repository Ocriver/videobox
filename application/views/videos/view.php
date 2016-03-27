


<div id="{videoid}">Loading the player...</div>
<script type="text/javascript">
    var playerInstance = jwplayer("{videoid}");
    playerInstance.setup({
        file: "<?php echo video_url('{videoid}')?>",
        image: "<?php echo asset_url('img/video_poster')?>/{videoid}.jpg",
        width: 640,
        height: 360,
        title: '{title}',
        description: '{text}',
        mediaid: '{videid}'
    });
</script>