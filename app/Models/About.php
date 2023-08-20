<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable =['title','description','name','age','mobile','country','email','image','university'];
    protected static $about;
    protected  static  $imageFile,$imageName,$imageDirectory,$imageUrl;

    public static function storedAbout($request)
    {
        self::$about                          = new About();
        self::$about ->title                  =$request->title;
        self::$about ->description            =$request->description ;
        self::$about ->name                   =$request->name;
        self::$about ->age                    =$request->age;
        self::$about ->mobile                 =$request->mobile;
        self::$about ->country                =$request->country;
        self::$about ->email                  =$request->email;
        self::$about ->image                  =self::getImageUrl($request);
        self::$about ->university             =$request->university;
        self::$about->save();
    }


    public static  function getImageUrl($request)
    {
        self::$imageFile = $request->file('image');
        self::$imageName =time().rand(10,1000).'.'.self::$imageFile->getClientOriginalExtension();
        self::$imageDirectory = 'upload/about-image/';
        self::$imageFile->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl=self::$imageDirectory.self::$imageName;
        return self::$imageUrl;
    }

    public static function updateAbout($request, $id)
    {
        self::$about =About::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$about->image;
        }

        self::$about ->title                  =$request->title;
        self::$about ->description            =$request->description ;
        self::$about ->name                   =$request->name;
        self::$about ->age                    =$request->age;
        self::$about ->mobile                 =$request->mobile;
        self::$about ->country                =$request->country;
        self::$about ->email                  =$request->email;
        self::$about ->image                  =self::$imageUrl;
        self::$about ->university             =$request->university;
        self::$about->save();

    }
    public static function deleteAbout($id)
    {
        self::$about = About::find($id);

        if(file_exists(self::$about->image))
        {
            unlink(self::$about->image);
        }
        self::$about->delete();
    }


}
