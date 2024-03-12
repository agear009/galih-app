<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [

        'product_id',
        'image_video'


    ];

    public function getListcontents()
    {
        $listcontents = DB::table('contents')
                                ->join('products','contents.product_id','=','products.id')
                                ->select('contents.*','products.name AS product_name')
                                ->get();
                                return $listcontents;
                            }

    public function getListContentsById($id)
    {
        $getListContentById = DB::table('contents')
            ->join('products','products.id','=','contents.product_id')
            ->where('contents.product_id','=',$id)
            ->select('contents.*','products.name AS product_name')
            ->get();
        return $getListContentById;
    }
}
