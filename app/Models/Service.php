<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Description',
        'Prix',
    ];

    public function factures() {
        return $this->belongsToMany( Facture::class, 'facture_service', 'facture_id', 'service_id' );
    }

    public function devis() {
        return $this->belongsToMany( Devis::class, 'bon_service', 'bon_id', 'service_id' );
    }

    public function bons() {
        // use pivot table, many bons has many services
        return $this->belongsToMany( Bon::class, 'bon_service', 'bon_id', 'service_id' );
    }

    // softdelete
    protected $softDelete = true;

}
