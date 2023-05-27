<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bon extends Model {
    use HasFactory;

    protected $fillable = [
        'Numero',
        'Date',
        'Montant',
        'Path',
        'contact_id',
        'compte_id',
        'devi_id',
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

    public function facture() {
        return $this->belongsTo( Facture::class );
    }

    // timestamps
    public $timestamps = true;

    // soft delete
    protected $softDelete = true;

}
