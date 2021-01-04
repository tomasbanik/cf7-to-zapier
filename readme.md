=== CF7 Redirections, Integrations and Database === Contributors:
tomasbanik Donate link:
https://github.com/tomasbanik/cf7-redirections-integrations-database
Tags: cf7, contact form, integromat, integration, redirection, database,
contact form 7, webhook Requires at least: 4.7 Tested up to: 5.5 Stable
tag: trunk Requires PHP: 7.0 License: GPLv2 or later License URI:
http://www.gnu.org/licenses/gpl-2.0.html

Use Contact Form 7 as a trigger to other 600+ applications.

== Description ==

[Contact Form 7
(CF7)](https://wordpress.org/plugins/contact-form-7/ "Install it first, of course")
is a awesome plugin used by 5+ million WordPress websites.

Webhooks are endpoint (urls) you can send data!

[Integromat (Integromat)](https://www.integromat.com/?pc=matemplates) is
a awesome service to connect your apps and automate workflows!

Start with blank integration or use pre-defined templates.

= How to Use =

Activate "Contact Form 7" and "CF7 Redirections, Integrations and
Database" plugins. Add new webhook and copy&pase it to "Integrations"
tab.

= Configuration =

Follow these steps:

1.  In Integromat, create a new scenario.
2.  Search for Contact Form 7 module.
3.  Choose a trigger as "Watch New Form Submissions".
4.  Add new webhook.
5.  Copy and insert the URL given into your Contact Form configuration
    and activate integration.

= Creating your workflow =

Click small "+" sign "Add another module" and continue creating your
workflow with filters and other apps.

= Review =

We would be grateful for a [review
here](https://wordpress.org/support/plugin/reviews/).

= Support =

-   Contact Form 7 - 5.2.1

== Installation ==

`Install [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) and activate it.`

-   Install "CF7 Redirections, Integrations and Database" by plugins
    dashboard.

Or

-   Upload the entire `cf7-redirections-integrations-database.zip` file
    to the `/wp-content/plugins/` directory.

Then

-   Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Does it works with Gutenberg? =

Yes. We support WordPress 5+ and CF7 too.

= Does it works for forms sent out of CF7? =

Nope. The intention here is to integrate CF7.

= Can I use it without Integromat? =

Yep. We are creating a integration to Integromat webhook, but you can
insert any URL to receive a JSON formated data.

= My sent data is empty =

Please, send us an email to cf7integrated@1-clicksetup.com

= How can I upload files and send link to webhook? =

If you send a form with file, we will copy this to a directory before
CF7 remove it and send the link to Integromat.

= How can I rename a field to webhook? =

You can add a "webhook" option to your field on form edit tab.

It's like the "class" option:
`[text your-field class:form-control id:field-id webhook:webhook-key]`.

This will create a text field with name "your-field", class
"form-control", id "field-id" and will be sent to webhook with key
"webhook-key".

= How I can get the free text value? =

We will replace the value for last option (which is the free\_text
input) with the value.

This way your webhook will receive the free text value and other options
if you allow it (like in checkbox).

== Screenshots ==

== Changelog ==

= 2.2.2 =

-   Support to CF7 5.2.1 changing 'wpcf7\_special\_mail\_tags' filter.

= 2.2.1 =

-   Support to CF7 5.2 changing 'free\_text' input name.

Props to @brunojlt

= 2.2.0 =

-   Support to free\_text option on radio and checkboxes.

= 2.1.4 =

-   Added 'ctz\_hook\_url' filter to change webhook URL

Props to @shoreline-chrism

= 2.1.2 =

-   Fix checkboxes.

= 2.1.1 =

-   Fix slashes on POST data.

= 2.1.0 =

-   Support to rename fields.

= 2.0.2 =

-   Plugin renamed.

= 2.0.0 =

-   Support to submit files.

= 1.4.0 =

-   Show form error when WordPress request fails and added support to
    throw or own exceptions.
-   Added 'ctz\_post\_request\_result' action after submit.
-   Added 'ctz\_trigger\_webhook\_error\_message' filter to change form
    message error.

= 1.3.1 =

-   Remove PHP 7+ dependency.
-   It's sad... I know.

= 1.3.0 =

-   Added support to [Special Mail Tags]
    (https://contactform7.com/special-mail-tags) on CF7.
-   Tested against WP 5.0.2 and CF7 version 5.1.

= 1.2.1 =

-   Tested against Contact Form 7 version 5.0.

= 1.2 =

-   Added support to
    [PIPE](https://contactform7.com/selectable-recipient-with-pipes) on
    CF7.
-   Tested against WP 4.9.2.

= 1.1.1 =

-   Fixed problem with a function inside empty() prior PHP 5.5.

= 1.1 =

-   Added the 'application/json' header by default to POST request.
-   Added 'ctz\_post\_request\_args' filter to POST request args.
-   Tested against WP 4.9.

= 1.0 =

-   It's alive!
-   Form configuration.

== Upgrade Notice ==

= 2.2.2 =

Support to free\_text option on radio and checkboxes.

Now we will replace the value for last option with the "free\_text"
value. So we can support the radio "others" and still receive other
selected options for checkboxes.

On 2.2.1: support to CF7 5.2 changing 'free\_text' input name. On 2.2.2:
Support to CF7 5.2.1 changing 'wpcf7\_special\_mail\_tags' filter.
