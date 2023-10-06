<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['seller_details','seller_documents'];
    protected $casts =  [
                            'seller_details'=>'json',
                            'seller_documents'=>'json'

                        ];
    /*
        user_id

        full_name
        last_name
        email
        mobile
        address

        documents
                    profile photo
                    aadhar
                    pass_book
                    birth_certificate
                    lsat graduation
                    gst certificate
                    COI
                    company pan card





    */
}
