<?php
	echo $HTML->subnav($CurrentUser, array(
		array('page'=>array(
						'perch_mailchimp',
						'perch_mailchimp/lists/edit',
						),
				'label'=>'Lists'),
		array('page'=>array(
						'perch_mailchimp/subscribers',
						),
				'label'=>'Subscribers'),
		array('page'=>array(
						'perch_mailchimp/campaigns',
						),
				'label'=>'Campaigns'),
		array('page'=>array(
						'perch_mailchimp/webhooks',
						),
				'label'=>'Webhooks'),

	));