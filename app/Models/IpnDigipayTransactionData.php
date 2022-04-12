<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpnDigipayTransactionData extends Model
{
    use HasFactory;

    protected $fillable = [
        "data_transactions",
        "hash_app_key",
        "hash_secret_key",
        "hash_public_key",
        "mode",
        "payment_method",
        "ref_commande",
        "commande_name",
        "amount",
        "currency",
        "ref_internal_bg",
        "statut",
        "event",
        "client_name",
        "client_phone",
        "client_email",
    ];
}
