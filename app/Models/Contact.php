<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'details'];
    protected static $contact;

    public static function storeContact($request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->details = $request->details;
        $contact->save();

        return $contact;
    }

    public static function updateContact($request, $id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->details = $request->details;
            $contact->save();
        }
    }

    public static function deleteContact($id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
        }
    }
}
