<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php echo PerchLang::get('List subscribers'); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php
        include('_sync.php');
    ?>
    
    <h1><?php echo $Lang->get('Listing all subscribers'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();
    echo $message;

    $HTML->set_formatter('pc', function($value) {
        return $value.'%';
    });

    echo $HTML->listing($subscribers, 
    		array('Email', 'First name', 'Last name'), 
    		array('subscriberEmail', 'subscriberFirstName', 'subscriberLastName'), 
            array(
                    'edit'   => 'edit',
                    'delete' => 'delete',
                ),
            array(
                'user'   => false,
                'edit'   => 'perch_mailchimp.subscribers.edit',
                'delete' => 'perch_mailchimp.subscribers.delete',
                )
            );

    echo $HTML->paging($Paging);


include (PERCH_PATH.'/core/inc/main_end.php'); ?>