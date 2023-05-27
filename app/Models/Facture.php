<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model {
    use HasFactory;

    protected $fillable = [
        'Numero',
        'Date',
        'Montant',
        'Remise',
        'type_remise',
        'Path',
        'contact_id',
        'compte_id',
        'devi_id',
        'bon_id',
        'etat',
    ];

    public function compte() {
        return $this->belongsTo( Compte::class );
    }

    public function contact() {
        return $this->belongsTo( Contact::class );
    }

    public function devis() {
        return $this->belongsTo( Devis::class );
    }

    public function bons() {
        return $this->belongsTo( Bon::class );
    }

    public function services() {
        return $this->belongsToMany( Service::class, 'facture_service', 'facture_id', 'service_id' );
    }

    // timestamps
    public $timestamps = true;

    // soft delete
    protected $softDelete = true;
}
