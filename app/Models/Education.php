<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['year1','degree1','university1','result1','details1','year2','degree2','university2','result2','details2','year3','degree3','university3','result3','details3','year4','degree4','university4','result4','details4'];
    protected $education;

    public static function storedEducation($request)
    {
        $education                    = new Education();

        $education->year1             = $request->year1;
        $education->degree1           = $request->degree1;
        $education->university1       = $request->university1;
        $education->result1           = $request->result1;
        $education->details1          = $request->details1;


        $education->year2             = $request->year2;
        $education->degree2           = $request->degree2;
        $education->university2       = $request->university2;
        $education->result2           = $request->result2;
        $education->details2          = $request->details2;


        $education->year3             = $request->year3;
        $education->degree3           = $request->degree3;
        $education->university3       = $request->university3;
        $education->result3           = $request->result3;
        $education->details3          = $request->details3;


        $education->year4             = $request->year4;
        $education->degree4           = $request->degree4;
        $education->university4       = $request->university4;
        $education->result4           = $request->result4;
        $education->details4          = $request->details4;



        $education->save();

        return $education;
    }

    public static function updateEducation($request, $id)
    {
        $education = Education::find($id);

        if ($education) {
            $education->year1             = $request->year1;
            $education->degree1           = $request->degree1;
            $education->university1       = $request->university1;
            $education->result1           = $request->result1;
            $education->details1          = $request->details1;


            $education->year2             = $request->year2;
            $education->degree2           = $request->degree2;
            $education->university2       = $request->university2;
            $education->result2           = $request->result2;
            $education->details2          = $request->details2;


            $education->year3             = $request->year3;
            $education->degree3           = $request->degree3;
            $education->university3       = $request->university3;
            $education->result3           = $request->result3;
            $education->details3          = $request->details3;


            $education->year4             = $request->year4;
            $education->degree4           = $request->degree4;
            $education->university4       = $request->university4;
            $education->result4           = $request->result4;
            $education->details4          = $request->details4;



            $education->save();
        }
    }

    public static function deleteEducation($id)
    {
        $education = Education::find($id);

        if ($education) {
            $education->delete();
        }
    }
}
