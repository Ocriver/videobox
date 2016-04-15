
<div>
    <h3>{title}</h3>
    <p>{text}</p>
</div>


<div id="player">
</div>
<script type="text/javascript">

    var conf = {
        key:       "cdd7d3a8-ba44-4260-a728-b82b7f9f7971",
        source: {
            dash:        '<?php echo video_url('{videoid}')?>',
            //TODO: video url para manifiesto
            poster:      '<?php echo asset_url('img/video_poster')?>/{videoid}.jpg'
        },
        style: {
            width:          '85%',
            aspectratio:    '16:9',
            controls:       true
        },
        tweaks: {
            context_menu_entries: [
                {
                    name : 'VideoBox Website',
                    url  : '<?php echo base_url() ?>'
                }
            ]
        },
        skin: {
            screenLogoImage : ""
        },
        playback : {
            autoplay         : false,
            muted            : false,
            audioLanguage    : ['es', 'en', 'de'],
            subtitleLanguage : 'es',
            preferredTech    : [{
                player: 'html5',
                streaming: 'dash'
            }]
        }
    };


    var player = bitdash('player');

    player.setup(conf).then(function(value) {
        // Success
        console.log('Successfully created bitdash player instance');
    }, function(reason) {
        // Error!
        console.log('Error while creating bitdash player instance');
    });
</script>
