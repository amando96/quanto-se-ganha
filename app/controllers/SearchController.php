<?php

class SearchController extends BaseController {
	public function showResults()
	{            
            return View::make('pages.search');
	}
        
        public function getResults($by, $param){
            if(Request::ajax()){
                $results = User::search($by, $param);
                return View::make('includes.results', array('results' => $results));
            } else {
                App::abort(404);
            }
        }
        
        public function autocomplete($data){
            if(Request::ajax()){
                switch($data){
                    case 'companies':
                        $results = User::autocomplete('companies');
                        break;
                    case 'districts':
                        $results = User::autocomplete('districts');
                        break;
                    default: /* positions */
                        $results = User::autocomplete('positions');
                        break;
                }
                
            } else {
                App::abort(404);
            }
            return $results;
        }

}