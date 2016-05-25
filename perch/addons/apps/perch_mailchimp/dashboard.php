<?php

    $API   = new PerchAPI(1.0, 'perch_mailchimp');
    $Lang  = $API->get('Lang');

    // check privs
    if($CurrentUser->has_priv('perch_mailchimp')) {

	    $Settings = $API->get('Settings');
	    $api_key  = $Settings->get('perch_mailchimp_api_key')->val();
	    
	    $Lists = new PerchMailChimp_Lists($API);
	    $Subscribers = new PerchMailChimp_Subscribers($API);
	    $lists = [];
	    
	    $msg = false;
	    if(!$api_key || $api_key == '') {
	    	//need to set these
	    	$msg = '<p class="bd helptext"><a href="'.PERCH_LOGINPATH.'/core/settings/">'. $Lang->get('You must set your Mailchimp API Key in Settings.').'</a></p>';
	    }else{    	
	    	$lists = $Lists->all();
	    }
	   

	?>

	<div class="widget">
		<h2><?php echo $Lang->get('MailChimp'); ?></h2>
		<div class="">
			<?php
			if ($msg) {
				echo $msg;
			} else {
				if (PerchUtil::count($lists)) {
					echo '<div class="bd">';
					foreach($lists as $List) {

						echo '<h3>'.PerchUtil::html($List->listTitle()).'<span class="note">'.PerchUtil::html($List->listMemberCount()).'</span>'.'</h3>'."\n";

						$subs = $Subscribers->get_latest_for_list($List);
						
						if(is_array($subs) && PerchUtil::count($subs)>0) {
							echo '<table class="fig">'."\n";
								
							foreach($subs as $Subscriber) {
								echo '<tr><td>'.PerchUtil::html($Subscriber->subscriberEmail()).'</td><td class="note">'.PerchUtil::html(strftime('%d %b %Y', strtotime($Subscriber->subCreated()))).'</td></tr>'."\n";
							}
							echo '</table>'."\n";
						}
					}
					echo '</div>';
				}
			}
			?>
		</div>
	</div>
<?php }
