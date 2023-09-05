<div class="list-items <?php if (get_field('show_items_as_buttons')) echo 'style-buttons';?>">
    <div class="inner">
        <h3 class="title"><?php echo get_field('title'); ?></h3>
        <div class="list">
            <?php foreach (get_field('list_elements') as $item) { ?>
                <div class="item">
                    <?php if (!get_field('show_items_as_buttons')) { ?> <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.18844 27.52L3.94844 23.72L10.1484 15.92L0.548438 13.12L2.54844 6.96L11.9084 10.44L11.5484 0.399998H18.0284L17.6684 10.44L27.0284 6.96L29.0284 13.12L19.4284 15.92L25.5884 23.72L20.3484 27.52L14.7884 19.28L9.18844 27.52Z" fill="#700353"/></svg><?php } ?>
                    <span><?php echo $item["item"]; ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>