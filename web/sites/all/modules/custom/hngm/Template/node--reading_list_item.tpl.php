<?php
	$date = explode('-', $node->field_published['und'][0]['value']);
	$year = $date[0];
	$month = $date[1];
	$day = $date[2];
	$pubdate = date("d F Y", mktime (0,0,0,$month,$day,$year));
?>

<div class="row">
	<div class="col-md-3">
        <?php if ($node->field_image_url){ ?>
            <div class="mb-12"><?php print "<img src ='".$node->field_image_url['und'][0]['value']."' class='border-1 border-g'>"; ?></div>
        <?php }else{ ?>
            <div class="mb-12"><img src ='/sites/default/files/nocover.png'></div>
        <?php } ?>
        <div class="mb-12">By <?php print $node->field_authors['und'][0]['value']; ?></div>
		<?php print $node->field_pages['und'][0]['value']; ?> pages
	</div>
	<div class="col-md-9">
        <div class="mb-12"><?php print $node->field_description['und'][0]['value']; ?></div>
        <?php if ($node->field_publisher){ ?>
            <div class="mb-12">Published by <?php print $node->field_publisher['und'][0]['value']; ?></div>
        <?php } ?>
        <div class="mb-12"><?php print $pubdate; ?></div>
        <div> ISBN: <?php print $node->field_isbn['und'][0]['value']; ?></div>
	</div>
</div>














