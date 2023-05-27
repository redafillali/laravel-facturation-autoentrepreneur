<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devi extends Model {
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
        'etat',
    ];

    public function compte() {
        return $this->belongsTo( Compte::class );
    }

    public function contact() {
        return $this->belongsTo( Contact::class );
    }

    public function services() {
        return $this->belongsToMany( Service::class, 'devis_service', 'devis_id', 'service_id' );
    }

    public function bons() {
        return $this->hasOne( Bon::class );
    }

    // timestamps
    public $timestamps = true;

    // soft delete
    protected $softDelete = true;
}
