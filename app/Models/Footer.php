<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = ['addressLink', 'mobileLink', 'emailLink',];
    protected static $footer;
    protected static $imageFile, $imageName, $imageDirectory, $imageUrl;

    public static function storedFooter($request)
    {
        self::$footer = new Footer();
        self::$footer->addressLink = $request->addressLink;
        self::$footer->mobileLink = $request->mobileLink;
        self::$footer->emailLink = $request->emailLink;
        self::$footer->save();
        return $footer;
    }


    public static function updateFooter($request, $id)
    {
        self::$footer = Footer::find($id);

        if (self::$footer) {

            self::$footer->addressLink = $request->addressLink;
            self::$footer->mobileLink = $request->mobileLink;
            self::$footer->emailLink = $request->emailLink;
            self::$footer->save();
        }
    }

    public static function deleteFooter($id)
    {
        self::$footer = Footer::find($id);

        if (self::$footer) {
            self::$footer->delete();
        }
    }
}








