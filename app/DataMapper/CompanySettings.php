<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2021. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\DataMapper;

use App\Utils\Traits\MakesHash;
use stdClass;

/**
 * CompanySettings.
 */
class CompanySettings extends BaseSettings
{
    use MakesHash;
    /*Group settings based on functionality*/

    /*Invoice*/
    public $auto_archive_invoice = false; // @implemented

    public $lock_invoices = 'off'; //off,when_sent,when_paid //@implemented

    public $enable_client_portal_tasks = false; //@ben to implement
    public $enable_client_portal_password = false; //@implemented
    public $enable_client_portal = true; //@implemented
    public $enable_client_portal_dashboard = true; // @TODO There currently is no dashboard so this is pending
    public $signature_on_pdf = false; //@implemented
    public $document_email_attachment = false; //@TODO I assume this is 3rd party attachments on the entity to be included

    public $portal_design_id = '1'; //?@deprecated

    public $timezone_id = ''; //@implemented
    public $date_format_id = ''; //@implemented
    public $military_time = false; // @TODOImplemented in Tasks only?

    public $language_id = ''; //@implemented
    public $show_currency_code = false; //@implemented

    public $company_gateway_ids = ''; //@implemented

    public $currency_id = '1'; //@implemented

    public $custom_value1 = ''; //@implemented
    public $custom_value2 = ''; //@implemented
    public $custom_value3 = ''; //@implemented
    public $custom_value4 = ''; //@implemented

    public $default_task_rate = 0; // @TODO Where do we inject this?

    public $payment_terms = ''; //@implemented
    public $send_reminders = true; //@TODO

    public $custom_message_dashboard = ''; // @TODO There currently is no dashboard so this is pending
    public $custom_message_unpaid_invoice = '';
    public $custom_message_paid_invoice = '';
    public $custom_message_unapproved_quote = '';
    public $auto_archive_quote = false; //@implemented
    public $auto_convert_quote = true; //@implemented
    public $auto_email_invoice = true; //@only used for Recurring Invoices, if set to false, we never send?

    public $inclusive_taxes = false; //@implemented
    public $quote_footer = ''; //@implmented

    public $translations; //@TODO not used anywhere

    public $counter_number_applied = 'when_saved'; // when_saved , when_sent //@implemented
    public $quote_number_applied = 'when_saved'; // when_saved , when_sent //@implemented

    /* Counters */
    public $invoice_number_pattern = ''; //@implemented
    public $invoice_number_counter = 1; //@implemented

    public $recurring_invoice_number_pattern = ''; //@implemented
    public $recurring_invoice_number_counter = 1; //@implemented

    public $quote_number_pattern = ''; //@implemented
    public $quote_number_counter = 1; //@implemented

    public $client_number_pattern = ''; //@implemented
    public $client_number_counter = 1; //@implemented

    public $credit_number_pattern = ''; //@implemented
    public $credit_number_counter = 1; //@implemented

    public $task_number_pattern = ''; //@implemented
    public $task_number_counter = 1; //@implemented

    public $expense_number_pattern = ''; //@implemented
    public $expense_number_counter = 1; //@implemented

    public $vendor_number_pattern = ''; //@implemented
    public $vendor_number_counter = 1; //@implemented

    public $ticket_number_pattern = ''; //@implemented
    public $ticket_number_counter = 1; //@implemented

    public $payment_number_pattern = ''; //@implemented
    public $payment_number_counter = 1; //@implemented

    public $project_number_pattern = ''; //@implemented
    public $project_number_counter = 1; //@implemented

    public $shared_invoice_quote_counter = false; //@implemented
    public $recurring_number_prefix = 'R'; //@implemented
    public $reset_counter_frequency_id = '0'; //@implemented
    public $reset_counter_date = ''; //@implemented
    public $counter_padding = 4; //@implemented

    public $auto_bill = 'off'; //off,always,optin,optout //@implemented
    public $auto_bill_date = 'on_due_date'; // on_due_date , on_send_date //@implemented

    //public $design = 'views/pdf/design1.blade.php'; //@deprecated - never used

    public $invoice_terms = ''; //@implemented
    public $quote_terms = ''; //@implemented
    public $invoice_taxes = 0; // ? used in AP only?
    // public $enabled_item_tax_rates = 0;
    public $invoice_design_id = 'VolejRejNm'; //@implemented
    public $quote_design_id = 'VolejRejNm'; //@implemented
    public $credit_design_id = 'VolejRejNm'; //@implemented
    public $invoice_footer = ''; //@implemented
    public $credit_footer = ''; //@implemented
    public $credit_terms = ''; //@implemented
    public $invoice_labels = ''; //@TODO used in AP only?
    public $tax_name1 = ''; //@TODO where do we use this?
    public $tax_rate1 = 0; //@TODO where do we use this?
    public $tax_name2 = ''; //@TODO where do we use this?
    public $tax_rate2 = 0; //@TODO where do we use this?
    public $tax_name3 = ''; //@TODO where do we use this?
    public $tax_rate3 = 0; //@TODO where do we use this?
    public $payment_type_id = '0'; //@TODO where do we use this?
    public $invoice_fields = ''; //@TODO is this redundant, we store this in the custom_fields on the company?

    public $show_accept_invoice_terms = false; //@TODO ben to confirm
    public $show_accept_quote_terms = false;  //@TODO ben to confirm
    public $require_invoice_signature = false;  //@TODO ben to confirm
    public $require_quote_signature = false;  //@TODO ben to confirm

    //email settings
    public $email_sending_method = 'default'; //enum 'default','gmail' //@implemented
    public $gmail_sending_user_id = '0'; //@implemented

    public $reply_to_email = ''; //@TODO
    public $bcc_email = ''; //@TODO
    public $pdf_email_attachment = false; //@implemented
    public $ubl_email_attachment = false; //@implemented

    public $email_style = 'light'; //plain, light, dark, custom  //@implemented
    public $email_style_custom = '';      //the template itself  //@implemented
    public $email_subject_invoice = '';  //@implemented
    public $email_subject_quote = '';  //@implemented
    public $email_subject_credit = ''; //@implemented
    public $email_subject_payment = ''; //@implemented
    public $email_subject_payment_partial = ''; //@implemented
    public $email_subject_statement = ''; //@implemented
    public $email_template_invoice = ''; //@implemented
    public $email_template_credit = ''; //@implemented
    public $email_template_quote = ''; //@implemented
    public $email_template_payment = ''; //@implemented
    public $email_template_payment_partial = ''; //@implemented
    public $email_template_statement = ''; //@implemented
    public $email_subject_reminder1 = ''; //@implemented
    public $email_subject_reminder2 = ''; //@implemented
    public $email_subject_reminder3 = ''; //@implemented
    public $email_subject_reminder_endless = ''; //@implemented
    public $email_template_reminder1 = ''; //@implemented
    public $email_template_reminder2 = ''; //@implemented
    public $email_template_reminder3 = ''; //@implemented
    public $email_template_reminder_endless = ''; //@implemented
    public $email_signature = ''; //@implemented
    public $enable_email_markup = true; //@TODO -

    public $email_subject_custom1 = ''; //@TODO
    public $email_subject_custom2 = ''; //@TODO
    public $email_subject_custom3 = ''; //@TODO

    public $email_template_custom1 = ''; //@TODO
    public $email_template_custom2 = ''; //@TODO
    public $email_template_custom3 = ''; //@TODO

    public $enable_reminder1 = false; //@implmemented
    public $enable_reminder2 = false; //@implmemented
    public $enable_reminder3 = false; //@implmemented
    public $enable_reminder_endless = false; //@implmemented

    public $num_days_reminder1 = 0;//@implmemented
    public $num_days_reminder2 = 0;//@implmemented
    public $num_days_reminder3 = 0;//@implmemented

    public $schedule_reminder1 = ''; // (enum: after_invoice_date, before_due_date, after_due_date) implmemented
    public $schedule_reminder2 = ''; // (enum: after_invoice_date, before_due_date, after_due_date) implmemented
    public $schedule_reminder3 = ''; // (enum: after_invoice_date, before_due_date, after_due_date) implmemented

    public $reminder_send_time = 32400; //number of seconds from UTC +0 to send reminders @TODO

    public $late_fee_amount1 = 0; //@implemented
    public $late_fee_amount2 = 0; //@implemented
    public $late_fee_amount3 = 0; //@implemented

    public $late_fee_percent1 = 0; //@implemented
    public $late_fee_percent2 = 0; //@implemented
    public $late_fee_percent3 = 0; //@implemented

    public $endless_reminder_frequency_id = '0'; //@implemented
    public $late_fee_endless_amount = 0; //@implemented
    public $late_fee_endless_percent = 0; //@implemented

    public $client_online_payment_notification = true; //@todo implement in notifications check this bool prior to sending payment notification to client
    public $client_manual_payment_notification = true; //@todo implement in notifications check this bool prior to sending manual payment notification to client

    /* Company Meta data that we can use to build sub companies*/

    public $name = ''; //@implemented
    public $company_logo = ''; //@implemented
    public $website = ''; //@implemented
    public $address1 = ''; //@implemented
    public $address2 = ''; //@implemented
    public $city = ''; //@implemented
    public $state = ''; //@implemented
    public $postal_code = ''; //@implemented
    public $phone = ''; //@implemented
    public $email = ''; //@implemented
    public $country_id; //@implemented
    public $vat_number = ''; //@implemented
    public $id_number = ''; //@implemented

    public $page_size = 'A4';  //Letter, Legal, Tabloid, Ledger, A0, A1, A2, A3, A4, A5, A6
    public $font_size = 9; //@implemented
    public $primary_font = 'Roboto';
    public $secondary_font = 'Roboto';
    public $primary_color = '#4caf50';
    public $secondary_color = '#2196f3';

    public $hide_paid_to_date = false; //@TODO where?
    public $embed_documents = false; //@TODO where?
    public $all_pages_header = false; //@implemented
    public $all_pages_footer = false; //@implemented
    public $pdf_variables = ''; //@implemented

    public $portal_custom_head = ''; //@TODO @BEN
    public $portal_custom_css = ''; //@TODO @BEN
    public $portal_custom_footer = ''; //@TODO @BEN
    public $portal_custom_js = ''; //@TODO @BEN

    public $client_can_register = false; //@implemented
    public $client_portal_terms = ''; //@TODO @BEN
    public $client_portal_privacy_policy = ''; //@TODO @BEN
    public $client_portal_enable_uploads = false; //@implemented
    public $client_portal_allow_under_payment = false; //@implemented
    public $client_portal_under_payment_minimum = 0; //@implemented
    public $client_portal_allow_over_payment = false; //@implemented

    public $use_credits_payment = 'off'; //always, option, off //@implemented
    public $hide_empty_columns_on_pdf = false;

    public static $casts = [
        'hide_empty_columns_on_pdf'          => 'bool',
        'enable_reminder_endless'            => 'bool',
        'use_credits_payment'                => 'string',
        'recurring_invoice_number_pattern'   => 'string',
        'recurring_invoice_number_counter'   => 'int',
        'client_portal_under_payment_minimum'=> 'float',
        'auto_bill_date'                     => 'string',
        'primary_color'                      => 'string',
        'secondary_color'                    => 'string',
        'client_portal_allow_under_payment'  => 'bool',
        'client_portal_allow_over_payment'   => 'bool',
        'auto_bill'                          => 'string',
        'lock_invoices'                      => 'string',
        'client_portal_terms'                => 'string',
        'client_portal_privacy_policy'       => 'string',
        'client_can_register'                => 'bool',
        'portal_design_id'					 => 'string',
        'late_fee_endless_percent'           => 'float',
        'late_fee_endless_amount'            => 'float',
        'auto_email_invoice'                 => 'bool',
        'reminder_send_time'                 => 'int',
        'email_sending_method'               => 'string',
        'gmail_sending_user_id'              => 'string',
        'currency_id'                        => 'string',
        'counter_number_applied'             => 'string',
        'quote_number_applied'               => 'string',
        'email_subject_custom1'              => 'string',
        'email_subject_custom2'              => 'string',
        'email_subject_custom3'              => 'string',
        'email_template_custom1'             => 'string',
        'email_template_custom2'             => 'string',
        'email_template_custom3'             => 'string',
        'enable_reminder1'                   => 'bool',
        'enable_reminder2'                   => 'bool',
        'enable_reminder3'                   => 'bool',
        'num_days_reminder1'                 => 'int',
        'num_days_reminder2'                 => 'int',
        'num_days_reminder3'                 => 'int',
        'schedule_reminder1'                 => 'string', // (enum: after_invoice_date, before_due_date, after_due_date)
        'schedule_reminder2'                 => 'string', // (enum: after_invoice_date, before_due_date, after_due_date)
        'schedule_reminder3'                 => 'string', // (enum: after_invoice_date, before_due_date, after_due_date)
        'late_fee_amount1'                   => 'float',
        'late_fee_amount2'                   => 'float',
        'late_fee_amount3'                   => 'float',
        'late_fee_percent1'                  => 'float',
        'late_fee_percent2'                  => 'float',
        'late_fee_percent3'                  => 'float',
        'endless_reminder_frequency_id'      => 'integer',
        'client_online_payment_notification' => 'bool',
        'client_manual_payment_notification' => 'bool',
        'document_email_attachment'          => 'bool',
        'enable_client_portal_password'      => 'bool',
        'enable_email_markup'                => 'bool',
        'enable_client_portal_dashboard'     => 'bool',
        'enable_client_portal'               => 'bool',
        'email_template_statement'           => 'string',
        'email_subject_statement'            => 'string',
        'signature_on_pdf'                   => 'bool',
        'quote_footer'                       => 'string',
        'page_size'                          => 'string',
        'font_size'                          => 'int',
        'primary_font'                       => 'string',
        'secondary_font'                     => 'string',
        'hide_paid_to_date'                  => 'bool',
        'embed_documents'                    => 'bool',
        'all_pages_header'                   => 'bool',
        'all_pages_footer'                   => 'bool',
        'project_number_pattern'             => 'string',
        'project_number_counter'             => 'int',
        'task_number_pattern'                => 'string',
        'task_number_counter'                => 'int',
        'expense_number_pattern'             => 'string',
        'expense_number_counter'             => 'int',
        'vendor_number_pattern'              => 'string',
        'vendor_number_counter'              => 'int',
        'ticket_number_pattern'              => 'string',
        'ticket_number_counter'              => 'int',
        'payment_number_pattern'             => 'string',
        'payment_number_counter'             => 'int',
        'reply_to_email'                     => 'string',
        'bcc_email'                          => 'string',
        'pdf_email_attachment'               => 'bool',
        'ubl_email_attachment'               => 'bool',
        'email_style'                        => 'string',
        'email_style_custom'                 => 'string',
        'company_gateway_ids'                => 'string',
        'address1'                           => 'string',
        'address2'                           => 'string',
        'city'                               => 'string',
        'company_logo'                       => 'string',
        'country_id'                         => 'string',
        'client_number_pattern'              => 'string',
        'client_number_counter'              => 'integer',
        'credit_number_pattern'              => 'string',
        'credit_number_counter'              => 'integer',
        'currency_id'                        => 'string',
        'custom_value1'                      => 'string',
        'custom_value2'                      => 'string',
        'custom_value3'                      => 'string',
        'custom_value4'                      => 'string',
        'custom_message_dashboard'           => 'string',
        'custom_message_unpaid_invoice'      => 'string',
        'custom_message_paid_invoice'        => 'string',
        'custom_message_unapproved_quote'    => 'string',
        'default_task_rate'                  => 'float',
        'email_signature'                    => 'string',
        'email_subject_invoice'              => 'string',
        'email_subject_quote'                => 'string',
        'email_subject_credit'               => 'string',
        'email_subject_payment'              => 'string',
        'email_subject_payment_partial'      => 'string',
        'email_template_invoice'             => 'string',
        'email_template_quote'               => 'string',
        'email_template_credit'              => 'string',
        'email_template_payment'             => 'string',
        'email_template_payment_partial'     => 'string',
        'email_subject_reminder1'            => 'string',
        'email_subject_reminder2'            => 'string',
        'email_subject_reminder3'            => 'string',
        'email_subject_reminder_endless'     => 'string',
        'email_template_reminder1'           => 'string',
        'email_template_reminder2'           => 'string',
        'email_template_reminder3'           => 'string',
        'email_template_reminder_endless'    => 'string',
        'enable_client_portal_password'      => 'bool',
        'inclusive_taxes'                    => 'bool',
        'invoice_number_pattern'             => 'string',
        'invoice_number_counter'             => 'integer',
        'invoice_design_id'                  => 'string',
        'invoice_fields'                     => 'string',
        'invoice_taxes'                      => 'int',
        //'enabled_item_tax_rates'             => 'int',
        'invoice_footer'                     => 'string',
        'invoice_labels'                     => 'string',
        'invoice_terms'                      => 'string',
        'credit_footer'                      => 'string',
        'credit_terms'                       => 'string',
        'name'                               => 'string',
        'payment_terms'                      => 'string',
        'payment_type_id'                    => 'string',
        'phone'                              => 'string',
        'postal_code'                        => 'string',
        'quote_design_id'                    => 'string',
        'credit_design_id'                   => 'string',
        'quote_number_pattern'               => 'string',
        'quote_number_counter'               => 'integer',
        'quote_terms'                        => 'string',
        'recurring_number_prefix'            => 'string',
        'reset_counter_frequency_id'         => 'integer',
        'reset_counter_date'                 => 'string',
        'require_invoice_signature'          => 'bool',
        'require_quote_signature'            => 'bool',
        'state'                              => 'string',
        'email'                              => 'string',
        'vat_number'                         => 'string',
        'id_number'                          => 'string',
        'tax_name1'                          => 'string',
        'tax_name2'                          => 'string',
        'tax_name3'                          => 'string',
        'tax_rate1'                          => 'float',
        'tax_rate2'                          => 'float',
        'tax_rate3'                          => 'float',
        'show_accept_quote_terms'            => 'bool',
        'show_accept_invoice_terms'          => 'bool',
        'timezone_id'                        => 'string',
        'date_format_id'                     => 'string',
        'military_time'                      => 'bool',
        'language_id'                        => 'string',
        'show_currency_code'                 => 'bool',
        'send_reminders'                     => 'bool',
        'enable_client_portal_tasks'         => 'bool',
        'auto_archive_invoice'               => 'bool',
        'auto_archive_quote'                 => 'bool',
        'auto_convert_quote'                 => 'bool',
        'shared_invoice_quote_counter'       => 'bool',
        'counter_padding'                    => 'integer',
        //'design'                             => 'string',
        'website'                            => 'string',
        'pdf_variables'                  	 => 'object',
        'portal_custom_head'                 => 'string',
        'portal_custom_css'                  => 'string',
        'portal_custom_footer'               => 'string',
        'portal_custom_js'                   => 'string',
        'client_portal_enable_uploads'       => 'bool',
    ];

    public static $free_plan_casts = [
        'currency_id'                        => 'string',
        'company_gateway_ids'                => 'string',
        'address1'                           => 'string',
        'address2'                           => 'string',
        'city'                               => 'string',
        'company_logo'                       => 'string',
        'country_id'                         => 'string',
        'custom_value1'                      => 'string',
        'custom_value2'                      => 'string',
        'custom_value3'                      => 'string',
        'custom_value4'                      => 'string',
        'inclusive_taxes'                    => 'bool',
        'name'                               => 'string',
        'payment_terms'                      => 'string',
        'payment_type_id'                    => 'string',
        'phone'                              => 'string',
        'postal_code'                        => 'string',
        'state'                              => 'string',
        'email'                              => 'string',
        'vat_number'                         => 'string',
        'id_number'                          => 'string',
        'tax_name1'                          => 'string',
        'tax_name2'                          => 'string',
        'tax_name3'                          => 'string',
        'tax_rate1'                          => 'float',
        'tax_rate2'                          => 'float',
        'tax_rate3'                          => 'float',
        'timezone_id'                        => 'string',
        'date_format_id'                     => 'string',
        'military_time'                      => 'bool',
        'language_id'                        => 'string',
        'show_currency_code'                 => 'bool',
        'website'                            => 'string',
    ];

    /**
     * Array of variables which
     * cannot be modified client side.
     */
    public static $protected_fields = [
        //	'credit_number_counter',
        //	'invoice_number_counter',
        //	'quote_number_counter',
    ];

    public static $string_casts = [
        'invoice_design_id',
        'quote_design_id',
        'credit_design_id',
    ];

    /**
     * Cast object values and return entire class
     * prevents missing properties from not being returned
     * and always ensure an up to date class is returned.
     *
     * @param $obj
     */
    public function __construct($obj)
    {
        //	parent::__construct($obj);
    }

    /**
     * Provides class defaults on init.
     *
     * @return stdClass
     */
    public static function defaults(): stdClass
    {
        $config = json_decode(config('ninja.settings'));

        $data = (object) get_class_vars(self::class);

        unset($data->casts);
        unset($data->protected_fields);
        unset($data->free_plan_casts);
        unset($data->string_casts);

        $data->timezone_id = (string) config('ninja.i18n.timezone_id');
        $data->currency_id = (string) config('ninja.i18n.currency_id');
        $data->language_id = (string) config('ninja.i18n.language_id');
        $data->payment_terms = (string) config('ninja.i18n.payment_terms');
        $data->military_time = (bool) config('ninja.i18n.military_time');
        $data->date_format_id = (string) config('ninja.i18n.date_format_id');
        $data->country_id = (string) config('ninja.i18n.country_id');
        $data->translations = (object) [];
        $data->pdf_variables = (object) self::getEntityVariableDefaults();

        return self::setCasts($data, self::$casts);
    }

    /**
     * In case we update the settings object in the future we
     * need to provide a fallback catch on old settings objects which will
     * set new properties to the object prior to being returned.
     *
     * @param $settings
     *
     * @return stdClass
     */
    public static function setProperties($settings): stdClass
    {
        $company_settings = (object) get_class_vars(self::class);

        foreach ($company_settings as $key => $value) {
            if (! property_exists($settings, $key)) {
                $settings->{$key} = self::castAttribute($key, $company_settings->{$key});
            }
        }

        return $settings;
    }

    /**
     * Stubs the notification defaults
     *
     * @return stdClass
     */
    public static function notificationDefaults() :stdClass
    {
        $notification = new stdClass;
        $notification->email = ['all_notifications'];

        return $notification;
    }

    /**
     * Defines entity variables for PDF generation
     *
     * @return stdClass The stdClass of PDF variables
     */
    private static function getEntityVariableDefaults() :stdClass
    {
        $variables = [
            'client_details' => [
                '$client.name',
                '$client.id_number',
                '$client.vat_number',
                '$client.address1',
                '$client.address2',
                '$client.city_state_postal',
                '$client.country',
                '$contact.email',
            ],
            'company_details' => [
                '$company.name',
                '$company.id_number',
                '$company.vat_number',
                '$company.website',
                '$company.email',
                '$company.phone',
            ],
            'company_address' => [
                '$company.address1',
                '$company.address2',
                '$company.city_state_postal',
                '$company.country',
            ],
            'invoice_details' => [
                '$invoice.number',
                '$invoice.po_number',
                '$invoice.date',
                '$invoice.due_date',
                '$invoice.balance_due',
                '$invoice.total',
            ],
            'quote_details' => [
                '$quote.number',
                '$quote.po_number',
                '$quote.date',
                '$quote.valid_until',
                '$quote.total',
            ],
            'credit_details' => [
                '$credit.number',
                '$credit.po_number',
                '$credit.date',
                '$credit.balance',
                '$credit.total',
            ],
            'product_columns' => [
                '$product.item',
                '$product.description',
                '$product.unit_cost',
                '$product.quantity',
                '$product.tax',
                '$product.line_total',
            ],
            'task_columns' =>[
                '$task.service',
                '$task.description',
                '$task.rate',
                '$task.hours',
                '$task.tax',
                '$task.line_total',
            ],
            'total_columns' => [
                '$subtotal',
                '$discount',
                '$total_taxes',
                '$line_taxes',
                '$custom_surcharge1',
                '$custom_surcharge2',
                '$custom_surcharge3',
                '$custom_surcharge4',
                '$total',
                '$paid_to_date',
                '$outstanding',
            ],
        ];

        return json_decode(json_encode($variables));
    }
}
