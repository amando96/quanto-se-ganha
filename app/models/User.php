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
                        ->or('position_name', 'LIKE', '%'.$param.'%')
                        ->or('district_name', 'LIKE', '%'.$param.'%')
                        ->get();
                    break;
            }
            return $results;            
        }

}
