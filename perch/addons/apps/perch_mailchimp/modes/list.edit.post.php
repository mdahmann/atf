<?php
    # Side panel
    echo $HTML->side_panel_start();
    echo $HTML->para('Edit your list options.');
    echo $HTML->side_panel_end();
    
    # Main panel
    echo $HTML->main_panel_start(); 
    include('_subnav.php');
		
    if (is_object($List)) {
        echo $HTML->heading1('Editing List ‘%s’', $HTML->encode($List->listTitle()));
    }else{
        echo $HTML->heading1('Creating a New List');
    }

    if ($message) echo $message;    
    
    $template_help_html = $Template->find_help();
    if ($template_help_html) {
        echo $HTML->heading2('Help');
        echo '<div id="template-help">' . $template_help_html . '</div>';
    }
    
    echo $HTML->heading2('List options');    
    
    /* ---- FORM ---- */
    echo $Form->form_start('edit');

        echo $Form->fields_from_template($Template, $details);
        echo $Form->submit_field('btnSubmit', 'Save', $API->app_path());

    echo $Form->form_end();
    /* ---- /FORM ---- */
        
    echo $HTML->main_panel_end();
  