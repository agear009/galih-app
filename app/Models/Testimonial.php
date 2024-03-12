<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [

        'product_id',
        'gambar_testimoni'


    ];


    public function getListtestimonials()
    {
        $listtestimonials = DB::table('testimonials')
                                ->join('products','testimonials.product_id','=','products.id')
                                ->select('testimonials.*','products.name AS product_name')
                                ->get();
                                return $listtestimonials;
                            }

    public function getListtestimonialsById($id)
    {
        $getListContentById = DB::table('testimonials')
            ->join('products','products.id','=','testimonials.product_id')
            ->where('testimonials.product_id','=',$id)
            ->select('testimonials.*','products.name AS product_name')
            ->get();
        return $getListContentById;
    }
}
