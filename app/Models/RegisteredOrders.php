<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredOrders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ferisoft_barcode_id',
        'marketplace_type',
        'package_status',
        'order_date',
        'shipment_full_address',
        'shipment_full_name',
        'invoice_full_address',
        'invoice_full_name',
        'order_number',
        'package_no',
        'customer_first_name',
        'customer_last_name',
        'customer_email',
        'quantity',
        'merchant_sku',
        'barcode',
        'price',
        'currency_code',
        'cargo_provide_name',
        'cargo_tracking_number',
        'cargo_tracking_link',
        'agreed_delivery_date',
        'fast_delivery',
        'created_at',
        'updated_at',
        ];
}
