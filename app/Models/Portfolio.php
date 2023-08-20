<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable =['image','title','details',];
    protected static $portfolio;
    protected  static  $imageFile,$imageName,$imageDirectory,$imageUrl;

    public static function storedPortfolio($request)
    {
        self::$portfolio                          = new Portfolio();
        self::$portfolio ->title                  =$request->title;
        self::$portfolio ->details                =$request->details;
        self::$portfolio ->image                  =self::getImageUrl($request);
        self::$portfolio->save();
        return self::$portfolio;
    }


    public static  function getImageUrl($request)
    {
        self::$imageFile = $request->file('image');
        self::$imageName =time().rand(10,1000).'.'.self::$imageFile->getClientOriginalName();
        self::$imageDirectory = 'upload/portfolio-image/';
        self::$imageFile->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl=self::$imageDirectory.self::$imageName;
        return self::$imageUrl;
    }

    public static function updatePortfolio($request, $id)
    {
        self::$portfolio =Portfolio::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$portfolio->image))
            {
                unlink(self::$portfolio->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$portfolio->image;
        }
        self::$portfolio ->title                  =$request->title;
        self::$portfolio ->details                =$request->details;
        self::$portfolio ->image                  =self::$imageUrl;
        self::$portfolio->save();

    }
    public static function deletePortfolio($id)
    {
        self::$portfolio = Portfolio::find($id);

        if(file_exists(self::$portfolio->image))
        {
            unlink(self::$portfolio->image);
        }
        self::$portfolio->delete();
    }


}
