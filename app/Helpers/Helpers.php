<?php
namespace App\Helpers;

use Help, Validator;

class Helpers {
	public static function timezoneSet(){
		date_default_timezone_set('Asia/Jakarta');
	}
	public static function breadCrumb($request){
		$title = $request->title ? $request->title : '';
		$data['title'] = $title;
		$breadCrumb = [];
		if(is_array($request->breadCrumb) && count($request->breadCrumb)>0){
			foreach($request->breadCrumb as $k => $v){
				array_push($breadCrumb,ucwords($v));
			}
		}
		$data['breadCrumb'] = $breadCrumb;
		return $data;
	}

	public static function resHttp($data=[]){
		$keyData = ['message','code','response'];
		$arr = [];
		foreach($keyData as $key => $val){
			$arr[$val] = isset($data[$val]) ? $data[$val] : ( # Cek key, apakah sudah di set
				$val=='code' ? 500 : (
					$val=='message' ? '-' : []
				)
			);
		}
		$code = $arr['code'];
		$msg = $arr['message'];

		$metadata = [
			'code'    => $arr['code'],
			'message' => $arr['message'],
		];
		$payload['metadata'] = $metadata;
		$payload['response'] = $arr['response'];
		return response()->json($payload,$code);
	}
}
