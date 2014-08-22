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

}