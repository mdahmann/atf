<?php include (PERCH_PATH.'/core/inc/sidebar_start.php'); ?>
<p><?php echo PerchLang::get('Here are your MailChimp lists.'); ?></p>
<?php include (PERCH_PATH.'/core/inc/sidebar_end.php'); ?>
<?php include (PERCH_PATH.'/core/inc/main_start.php'); ?>
<?php include ('_subnav.php'); ?>

    <?php
        include('_sync.php');
    ?>
    
    <h1><?php echo $Lang->get('Listing all lists'); ?></h1>

	<?php
	/* ----------------------------------------- SMART BAR ----------------------------------------- */
       
	/* ----------------------------------------- /SMART BAR ----------------------------------------- */
    $Alert->output();
    echo $message;

    $HTML->set_formatter('pc', function($value) {
        return $value.'%';
    });

    echo $HTML->listing($lists, 
    		array('Title', 'List ID', 'Subscribers', 'Open rate', 'Click rate'), 
    		array('listTitle', 'listMailChimpID', 'listMemberCount', 'pc|listOpenRate', 'pc|listClickRate'), 
            array(
                    'edit'   => 'lists/edit',
                    'delete' => 'lists/delete',
                ),
            array(
                'user'   => $CurrentUser,
                'edit'   => 'perch_mailchimp.lists.edit',
                'delete' => null,
                )
            );

    echo $HTML->paging($Paging);


include (PERCH_PATH.'/core/inc/main_end.php'); ?>