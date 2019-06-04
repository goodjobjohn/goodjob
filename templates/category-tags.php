<?php $posttags = get_the_tags(); ?> 
<?php if ($posttags) { ?>
    <?php foreach($posttags as $tag) { ?>
        <div class="post-tag"><span><?php echo $tag->name; ?></span></div>
    <?php } ?>
<?php } ?>
<div class="post-cat"><span><?php echo strip_tags(get_the_category_list(', ')) ; ?></span></div>
