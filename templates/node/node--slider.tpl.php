<?php

$content['slider_subtitle']['#label_display'] = 'hidden';
$content['slider_link']['#label_display']     = 'hidden';
$content['slider_image']['#label_display']    = 'hidden';

?>

<li style="float: left; width: 920px; background: url(<?php print file_create_url($variables['slider_image'][0]['uri']) ?>) no-repeat">
    <a href="#" class="linkban">
        <h3>
            <?php print $title ?>
        </h3>
        <span><?php print render($content['slider_subtitle']) ?> </span>
        <span class="btn"><?php print render($content['slider_link']) ?> </span>
    </a>
</li>
