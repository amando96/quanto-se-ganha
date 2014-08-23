<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');        
        public static function search($by, $param){
            switch($by){
                case 'district':
                    $results = DB::table('salaries')
                        ->join('districts', 'salary_district', '=', 'district_id')
                        ->join('companies', 'salary_company', '=', 'company_id')
                        ->join('positions', 'salary_position', '=', 'position_id')
                        ->select('*')
                        ->where('district_name', 'LIKE', '%'.$param.'%')
                        ->get();
                break;
                case 'position':
                    $results = DB::table('salaries')
                        ->join('districts', 'salary_district', '=', 'district_id')
                        ->join('companies', 'salary_company', '=', 'company_id')
                        ->join('positions', 'salary_position', '=', 'position_id')
                        ->select('*')
                        ->where('position_name', 'LIKE', '%'.$param.'%')
                        ->get();
                    break;
                case 'company':
                    $results = DB::table('salaries')
                        ->join('districts', 'salary_district', '=', 'district_id')
                        ->join('companies', 'salary_company', '=', 'company_id')
                        ->join('positions', 'salary_position', '=', 'position_id')
                        ->select('*')
                        ->where('company_name', 'LIKE', '%'.$param.'%')
                        ->get();
                    break;
                case 'all':
                    $results = DB::table('salaries')
                        ->join('districts', 'salary_district', '=', 'district_id')
                        ->join('companies', 'salary_company', '=', 'company_id')
                        ->join('positions', 'salary_position', '=', 'position_id')
                        ->select('*')
                        ->where('company_name', 'LIKE', '%'.$param.'%')
                        ->orWhere('position_name', 'LIKE', '%'.$param.'%')
                        ->orWhere('district_name', 'LIKE', '%'.$param.'%')
                        ->get();
                    break;
                case 'recent':
                    $results = DB::table('salaries')
                        ->join('districts', 'salary_district', '=', 'district_id')
                        ->join('companies', 'salary_company', '=', 'company_id')
                        ->join('positions', 'salary_position', '=', 'position_id')
                        ->select('*')
                        ->orderBy('salary_id', 'desc')
                        ->get();
                    break;
            }
            return $results;            
        }
        
        public static function getSubmitData(){
            $data = array(
                'positions' => DB::table('positions')->get(),
                'districts' => DB::table('districts')->get(),
                'companies' => DB::table('companies')->get()
            );
            return $data;
        }
        
        public static function autocomplete($what){
            switch($what){
                case 'companies':
                    $companies = DB::table('companies')->get();
                    $data = '{"suggestions": [';
                    foreach($companies as $key => $company){
                        if($key != last(array_keys($companies))){
                            $data .= '{"value": "'.$company->company_name.'", "data": "'.$company->company_id.'"},';
                        } else {
                            $data .= '{"value": "'.$company->company_name.'", "data": "'.$company->company_id.'"}';
                        }
                    }
                    $data .= ']}';
                    break;
                case 'districts':
                    $districts = DB::table('districts')->get();
                    $data = '{"suggestions": [';
                    foreach($districts as $key => $district){
                        if($key != last(array_keys($districts))){
                            $data .= '{"value": "'.$district->district_name.'", "data": "'.$district->district_id.'"},';
                        } else {
                            $data .= '{"value": "'.$district->district_name.'", "data": "'.$district->district_id.'"}';
                        }
                    }
                    $data .= ']}';
                    break;
                default: /* positions */
                    $positions = DB::table('positions')->get();
                    $data = '{"suggestions": [';
                    foreach($positions as $key => $position){
                        if($key != last(array_keys($positions))){
                            $data .= '{"value": "'.$position->position_name.'", "data": "'.$position->position_id.'"},';
                        } else {
                            $data .= '{"value": "'.$position->position_name.'", "data": "'.$position->position_id.'"}';
                        }
                    }
                    $data .= ']}';
                    break;
            }
            return $data;
        }
        
        
        public static function insertSalary($data){
            $district = $data['district'];
            $position = $data['position'];     
            $company = $data['company'];
            $salary = $data['salary'];
            $gender = $data['gender'];
            $ip = Request::getClientIp();

            DB::table('salaries')->insert(
                array(
                    'salary_district' => $district,
                    'salary_position' => $position, 
                    'salary_company' => $company,
                    'salary_value' => $salary, 
                    'salary_gender' => $gender, 
                    'submitter_ip' =>  $ip
                )
            );
            return Redirect::to('submeter')->with('message', 'Inserido com sucesso');
        }

}
