<form method="post" action="<?php echo PerchUtil::html($Form->action()); ?>">
    <div>
        <button type="submit" class="button topadd"><img src="<?php echo $API->app_path(); ?>/assets/sync.svg" width="12" class="sync" /> <?php echo $Lang->get('Sync'); ?></button>
        <?php echo $Form->submit('sync', 'Sync', 'hidden'); ?>
    </div>
    <style>
        .sync {
            width: 12px;
            display: inline-block;
            margin-right: 2px;
            vertical-align: top;
            opacity: 0.7;
        }
    </style>
</form>