<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Home extends Model
{
    use HasFactory;
    protected $fillable =['link1','link2','link3','title','description','image'];
    protected static $home;
    protected  static  $imageFile,$imageName,$imageDirectory,$imageUrl;

    public static function storedHome($request)
    {
        self::$home                          = new Home();
        self::$home ->link1                  =$request->link1;
        self::$home ->link2                  =$request->link2;
        self::$home ->link3                  =$request->link3;
        self::$home ->title                  =$request->title;
        self::$home ->description            =$request->description;
        self::$home ->image                  =self::getImageUrl($request);
        self::$home->save();
        Return self::$home;

    }


    public static  function getImageUrl($request)
    {
        self::$imageFile = $request->file('image');
        self::$imageName =time().rand(10,1000).'.'.self::$imageFile->getClientOriginalExtension();
        self::$imageDirectory = 'upload/home-image/';
        self::$imageFile->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl=self::$imageDirectory.self::$imageName;
        return self::$imageUrl;
    }

    public static function updateHome($request, $id)
    {
        self::$home =Home::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$home->image))
            {
                unlink(self::$home->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$home->image;
        }
        self::$home ->link1                  =$request->link1;
        self::$home ->link2                  =$request->link2;
        self::$home ->link3                  =$request->link3;
        self::$home ->title                  =$request->title;
        self::$home ->description            =$request->description;
        self::$home ->image                  =self::$imageUrl;
        self::$home->save();

    }
    public static function deleteHome($id)
    {
        self::$home = Home::find($id);

        if(file_exists(self::$home->image))
        {
            unlink(self::$home->image);
        }
        self::$home->delete();
    }


}
