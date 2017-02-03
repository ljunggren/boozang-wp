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
        <legend class="screen-reader-text">
            <span><?php _e('Checkbox option for Boozang testing tool', $this->plugin_name);?></span>
        </legend>
        <label for="<?php echo $this->plugin_name; ?>-option1">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-option1" name="<?php echo $this->plugin_name; ?>[option1]" value="1" <?php checked($option1, 1); ?> />
            <span><?php esc_attr_e('Boozang checkbox option', $this->plugin_name); ?></span>
        </label>
    </fieldset>


    <fieldset>
        <p>Boozang project API key. Sign-up for free <a href="http://boozang.com">here</a> and get your project API key.
        <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-projectkey" name="<?php echo $this->plugin_name; ?>[projectkey]" value="<?php if(!empty($projectkey)) echo $projectkey; ?>"/>        
    </fieldset>


    <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    <span>In order to launch the tool, simply type /bz in the Wordpress root, or click <a target="_blank" href="<?php echo site_url(); ?>/bz">here<a></span>    

    </form>

</div>

