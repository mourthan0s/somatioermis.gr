<div class="employers-list">
    <div class="grid-x grid-padding-x inner">
        <div class="large-2"></div>
        <div class="large-8">
            <div class="title"><?php echo get_field('title'); ?></div>
            <div class="employers">
                <?php foreach (get_field('list') as $employe) {?>
                    <div class="employee">
                        <div class="name"><?php echo $employe["name"]; ?></div>
                        <div class="job_title"><?php echo $employe["job_title"]; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="large-2"></div>
    </div>
</div> 