<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * $contactform is 'WPCF7_ContactForm' from 'CFTZ_Module_CF7::html_template_panel_html'
 */

$activate = '1';
$hook_url = '';
$send_mail = '';
$special_mail_tags = '';

if ( is_a( $contactform, 'WPCF7_ContactForm' ) ) {
    $properties = $contactform->prop( CFTZ_Module_CF7::METADATA );

    if ( isset( $properties['activate'] ) ) {
        $activate = $properties['activate'];
    }

    if ( isset( $properties['hook_url'] ) ) {
        $hook_url = $properties['hook_url'];
    }

    if ( isset( $properties['send_mail'] ) ) {
        $send_mail = $properties['send_mail'];
    }

    if ( isset( $properties['special_mail_tags'] ) ) {
        $special_mail_tags = $properties['special_mail_tags'];
    }
}

?>

<h1>
    <?php _e( 'Integromat', CFTZ_TEXTDOMAIN ) ?>
    <p></p>
</h1

<fieldset>
    <legend>
        <?php _e( 'Step 1: <a href="https://www.integromat.com/en/apps/invite/e6d904e228dccd41a3712b2ebedc13b9?pc=matemplates" target="_blank">Start using a Module or select a template</a>', CFTZ_TEXTDOMAIN ); ?>
        <br>
        <?php _e( 'Step 2: Copy&Paste the webhook created in the first step', CFTZ_TEXTDOMAIN ); ?>
    </legend>

    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label>
                        <?php _e( 'Active?', CFTZ_TEXTDOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <p>
                        <label for="ctz-webhook-activate">
                            <input type="checkbox" id="ctz-webhook-activate" name="ctz-webhook-activate" value="1" <?php checked( $activate, "1" ) ?>>
                            <?php _e( 'Yes. Send all data to Integromat', CFTZ_TEXTDOMAIN ) ?>
                        </label>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>
                        <?php _e( 'Webhook URL', CFTZ_TEXTDOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <p>
                        <label for="ctz-webhook-hook-url">
                            <input type="url" id="ctz-webhook-hook-url" name="ctz-webhook-hook-url" value="<?php echo $hook_url; ?>" style="width: 100%;">
                        </label>
                    </p>
                    <?php if ( $activate && empty( $hook_url ) ): ?>
                        <p class="description" style="color: #D00;">
                            <?php _e( 'Paste webhook URL from Watch New Form Submissions trigger here.' ); ?>
                        </p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>
                        <?php _e( 'Sending Mail?', CFTZ_TEXTDOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <p>
                        <label for="ctz-webhook-send-mail">
                            <input type="checkbox" id="ctz-webhook-send-mail" name="ctz-webhook-send-mail" value="1" <?php checked( $send_mail, "1" ) ?>>
                            <?php _e( 'Yes', CFTZ_TEXTDOMAIN ) ?>
                        </label>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>



<h2>
    <?php _e( 'Data sent to Webhook', CFTZ_TEXTDOMAIN ) ?>
</h2>

<p><?php _e( 'We will send your form data as below:', CFTZ_TEXTDOMAIN ) ?></p>

<?php
    $sent_data = array();

    // Special Tags
    $special_tags = array();
    $special_tags = CFTZ_Module_CF7::get_special_mail_tags_from_string( $special_mail_tags );
    $tags = array_keys( $special_tags );

    // Form Tags
    $form_tags = $contactform->scan_form_tags();
    foreach ( $form_tags as $tag ) {
        $key = $tag->get_option('webhook');
        if (! empty($key) && ! empty($key[0])) {
            $tags[] = $key[0];
            continue;
        }

        $tags[] = $tag->name;
    }

    foreach ( $tags as $tag ) {
        if ( empty( $tag ) ) continue;

        $sent_data[ $tag ] = 'xyz';
    }
?>

<pre style="background: #FFF; border: 1px solid #CCC; padding: 10px; margin: 0;"><?php
    echo json_encode( $sent_data, JSON_PRETTY_PRINT );
?></pre>

