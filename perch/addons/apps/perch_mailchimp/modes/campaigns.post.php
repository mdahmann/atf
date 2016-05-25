<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php echo PerchLang::get('List campaigns'); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php
        include('_sync.php');
    ?>
    
    <h1><?php echo $Lang->get('Listing all campaigns'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();
    echo $message;

    $HTML->set_formatter('dt', function($value) {
        return strftime(PERCH_DATE_LONG.' '.PERCH_TIME_SHORT, strtotime($value));
    });

    echo $HTML->listing($campaigns, 
    		array('Title', 'List', 'Date'), 
    		array('campaignTitle', 'listTitle', 'dt|campaignSendTime'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => false,
                'edit'   => 'perch_mailchimp.campaigns.edit',
                'delete' => 'perch_mailchimp.campaigns.delete',
                )
            );

    echo $HTML->paging($Paging);


include (PERCH_PATH.'/core/inc/main_end.php'); ?>