<?php

namespace App\Providers\Products;

use Illuminate\Support\Facades\DB;
class Index
{
      public function Index()
      {
        $produccts = DB::table('products')->get();
      }
}