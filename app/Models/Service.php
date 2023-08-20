<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title1','details1','title2','details2','title3','details3','title4','details4','title5','details5','title6','details6','award','client','coffeDate','totalProject'];
    protected $service;

    public static function storedService($request)
    {
        $service                    = new Service();

        $service->title1             = $request->title1;
        $service->details1          = $request->details1;

        $service->title2             = $request->title2;
        $service->details2          = $request->details2;

        $service->title3             = $request->title3;
        $service->details3          = $request->details3;

        $service->title4             = $request->title4;
        $service->details4          = $request->details4;

        $service->title5             = $request->title5;
        $service->details5          = $request->details5;

        $service->title6             = $request->title6;
        $service->details6          = $request->details6;


        $service->award             = $request->award;
        $service->client          = $request->client;


        $service->coffeDate             = $request->coffeDate;
        $service->totalProject          = $request->totalProject;

        $service->save();

        return $service;
    }

    public static function updateService($request, $id)
    {
        $service = Service::find($id);

        if ($service) {
            $service->title1             = $request->title1;
            $service->details1          = $request->details1;

            $service->title2             = $request->title2;
            $service->details2          = $request->details2;

            $service->title3             = $request->title3;
            $service->details3          = $request->details3;

            $service->title4             = $request->title4;
            $service->details4          = $request->details4;

            $service->title5             = $request->title5;
            $service->details5          = $request->details5;

            $service->title6             = $request->title6;
            $service->details6          = $request->details6;


            $service->award             = $request->award;
            $service->client          = $request->client;


            $service->coffeDate             = $request->coffeDate;
            $service->totalProject          = $request->totalProject;

            $service->save();
        }
    }

    public static function deleteService($id)
    {
        $service = Service::find($id);

        if ($service) {
            $service->delete();
        }
    }
}
