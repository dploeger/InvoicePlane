<?php

/**
 * InvoicePlane
 *
 * @package     InvoicePlane
 * @author      InvoicePlane Developers & Contributors
 * @copyright   Copyright (C) 2014 - 2018 InvoicePlane
 * @license     https://invoiceplane.com/license
 * @link        https://invoiceplane.com
 *
 * Based on FusionInvoice by Jesse Terry (FusionInvoice, LLC)
 */

namespace IP\Support;

class Frequency
{
    /**
     * Returns a list of frequencies for recurring invoices.
     *
     * @return array
     */
    public static function lists()
    {
        return [
            '1' => trans('ip.days'),
            '2' => trans('ip.weeks'),
            '3' => trans('ip.months'),
            '4' => trans('ip.years'),
        ];
    }
}