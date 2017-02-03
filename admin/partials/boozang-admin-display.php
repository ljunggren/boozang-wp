<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://boozang.com
 * @since      1.0.0
 *
 * @package    Boozang
 * @subpackage Boozang/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">


    <h2 class="nav-tab-wrapper">Boozang Plugin Settings Page</h2>

    <form method="post" name="cleanup_options" action="options.php">

    <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $option1 = $options['option1'];
        $projectkey = $options['projectkey'];
    ?>

    <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>

    <!-- remove some meta and generators from the <head> -->



    <fieldset>
        <p>Boozang project API key. Sign-up for free <a href="https://boozang.com">here</a> and get your project API key.
        <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-projectkey" name="<?php echo $this->plugin_name; ?>[projectkey]" value="<?php if(!empty($projectkey)) echo $projectkey; ?>"/>        
    </fieldset>

        <fieldset>
        <p>In order to facilitate test automation and collaboration, the Boozang plugin will save information in your project account at <a target="_blank" href="https://api.boozang.com">https://api.boozang.com</a>.<br/>
           Projects can be exported to your local desktop and deleted at any time by accessing your project dashboard.</p>
        <label for="<?php echo $this->plugin_name; ?>-option1">
            <input type="checkbox" onchange="document.getElementById('savebutton').disabled = !this.checked;" id="<?php echo $this->plugin_name; ?>-option1" name="<?php echo $this->plugin_name; ?>[option1]" value="0" <?php checked($option1, 1); ?> />
            <span><?php esc_attr_e('I agree with ', $this->plugin_name); ?><a target="_blank" href="https://boozang.com/toc/">Terms of Service</a><?php esc_attr_e(' for the Boozang testing tool', $this->plugin_name); ?></span>
        </label>
    </fieldset>

     <br/>
     <input type="submit" id="savebutton" name="savebutton" class="button button-primary" value="Save changes" disabled="<?= ($option1 = 0) ?>"/>
     <br/> <br/>

    <span>In order to launch the tool, simply type /bz in the Wordpress root, or click <a target="_blank" href="<?php echo site_url(); ?>/bz">here<a></span>    

    </form>

</div>

