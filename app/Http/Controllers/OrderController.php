<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\RegisteredOrders;
class OrderController extends Controller
{
    public function getUsers()
    {
        $response = Http::post('https://eticaretdestekhizmetleri.com/ferisoft-api/login', [
            'email' => 'mustafabu2014@gmail.com',
            'password' => 'mustafabu2014@gmail.com',
        ]);
        $response = json_decode($response->body());

        $token = $response->message->token;

        $response = Http::withHeaders(array('Authorization'=>'Bearer '.$token))->get('https://eticaretdestekhizmetleri.com/ferisoft-api/user');
        dd(json_decode($response->body()));
    }
    public function getRegisteredOrders()
    {
        $response = Http::post('https://eticaretdestekhizmetleri.com/ferisoft-api/login', [
            'email' => 'mustafabu2014@gmail.com',
            'password' => 'mustafabu2014@gmail.com',
        ]);
        $response = json_decode($response->body());

        $token = $response->message->token;

        $response = Http::withHeaders(array('Authorization'=>'Bearer '.$token))->get('https://eticaretdestekhizmetleri.com/ferisoft-api/userShipping');

        $data = json_decode($response->body());

        for($i = 0; $i < count($data); $i++){
            RegisteredOrders::updateOrCreate([
                'user_id' => $data[$i]->user_id,
                'ferisoft_barcode_id' => $data[$i]->ferisoft_barcode_id,
                'marketplace_type' => $data[$i]->marketplace_type,
                'package_status' => $data[$i]->package_status,
                'order_date' => $data[$i]->order_date,
                'shipment_full_address' => $data[$i]->shipment_full_address,
                'shipment_full_name' => $data[$i]->shipment_full_name,
                'invoice_full_address' => $data[$i]->invoice_full_address,
                'invoice_full_name' => $data[$i]->invoice_full_name,
                'order_number' => $data[$i]->order_number,
                'package_no' => $data[$i]->package_no,
                'customer_first_name' => $data[$i]->customer_first_name,
                'customer_last_name' => $data[$i]->customer_last_name,
                'customer_email' => $data[$i]->customer_email,
                'quantity' => $data[$i]->quantity,
                'merchant_sku' => $data[$i]->merchant_sku,
                'barcode' => $data[$i]->barcode,
                'price' => $data[$i]->price,
                'currency_code' => $data[$i]->currency_code,
                'cargo_provide_name' => $data[$i]->cargo_provide_name,
                'cargo_tracking_number' => $data[$i]->cargo_tracking_number,
                'cargo_tracking_link' => $data[$i]->cargo_tracking_link,
                'agreed_delivery_date' => $data[$i]->agreed_delivery_date,
                'fast_delivery' => $data[$i]->fast_delivery,
                'created_at' => $data[$i]->created_at,
                'updated_at' => $data[$i]->updated_at
            ]);
        }
    }
    public function listOrders()
    {
        $orders = RegisteredOrders::all();

        return view('orders.list', compact('orders'));

    }
}
