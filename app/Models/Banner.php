<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [

        'product_id',
        'banner'


    ];

    public function getListbanners()
    {
        $listbanners = DB::table('banners')
                                ->join('products','banners.product_id','=','products.id')
                                ->select('banners.*','products.name AS product_name')
                                ->get();
                                return $listbanners;
                            }

    public function getListbannersById($id)
    {
        $getListContentById = DB::table('banners')
            ->join('products','products.id','=','banners.product_id')
            ->where('banners.product_id','=',$id)
            ->select('banners.*','products.name AS product_name')
            ->get();
        return $getListContentById;
    }
}
