<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'information';

    use Encryptable;

    protected $encryptable = [
        'bsn',
        'iban',
        'credit_card_number',
        'civ'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'bsn',
        'email',
        'phone',
        'street',
        'house_number',
        'postal_code',
        'city',
        'country',
        'IBAN',
        'credit_card_number',
        'civ',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getLastName()
    {
        return $this->last_name;
    }

}
