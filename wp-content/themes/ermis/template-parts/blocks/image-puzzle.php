<div class="image-puzzle">
    <?php foreach (get_field('images') as $img) { ?>
        <div class="img-wrapper"><?php echo wp_get_attachment_image($img["image"],'full'); ?></div>
    <?php } ?>
</div>