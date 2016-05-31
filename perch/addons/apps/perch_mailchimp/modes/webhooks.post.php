<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php echo PerchLang::get('List webhooks'); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php
        include('_sync.php');
    ?>
    
    <h1><?php echo $Lang->get('Listing all webhooks'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();
    echo $message;

    echo $HTML->listing($webhooks, 
    		array('ID', 'URL'), 
    		array('webhookMailChimpID', 'webhookURL'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => false,
                'edit'   => 'perch_mailchimp.webhooks.edit',
                'delete' => 'perch_mailchimp.webhooks.delete',
                )
            );

    echo $HTML->paging($Paging);


include (PERCH_PATH.'/core/inc/main_end.php'); ?>