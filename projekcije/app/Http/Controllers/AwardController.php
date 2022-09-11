<?php

namespace App\Http\Controllers;

use App\Http\Resources\AwardCollection;
use App\Http\Resources\AwardResource;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::all();
        return new  AwardCollection($awards);
    }
    public function show(Award $award){

        return new AwardResource($award);
    }


}
