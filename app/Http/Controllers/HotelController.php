<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_hotel;
use App\seo_hotel;

class HotelController extends Controller
{
    //migrating data nama_hotel to seo in table seo_data_hotel
    public function insert_seo(){
    	$data = data_hotel::get();
    	foreach ($data as $key) {
    		$seo_data = new seo_hotel; 
    		$seo_data->seo = $this->make_seo($key->nama_hotel);
    		$seo_data->no_hotel = $key->no;
    		$seo_data->save();
    	}
    	return "success";
    }
    //converting string nama to seo format
    public function make_seo($string){
    	$lower = strtolower($string);
    	$spliting = explode(" ", $lower);
    	$name="";
    	foreach ($spliting as $key) {
    		$name .= $key."-";
    	}
    	return $name;
    }

    public function home(){
    	$data = data_hotel::paginate(12);
    	return view("index", compact('data'));
    }
}
