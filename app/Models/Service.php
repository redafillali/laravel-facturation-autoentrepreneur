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
        return $this->belongsToMany( Devis::class, 'devi_service', 'devi_id', 'service_id' );
    }

    // softdelete
    protected $softDelete = true;

}
