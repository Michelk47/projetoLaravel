<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AdressController extends Controller
{
    public function index(){
        $address = Address::all();

        return $address;
    }

    public function findOne(Request $r){
        $address = Address::find($r->id);

        return $address;
    }

    public function add(Request $r){
        $rawData = $r->only(['address']);

        $address = Address::create($rawData);
        return $address;
    }
}
