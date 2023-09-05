<section class="rating">
    <div class="sub_rating inner">
        <?php foreach (get_field('counters_list') as $i=>$number) {?>
            <div class="item">
                <div class="number"><?php echo $number['number']; ?></div>
                <div class="text"><?php echo $number['text']; ?></div>
            </div>
        <?php }?>
    </div>
</section>