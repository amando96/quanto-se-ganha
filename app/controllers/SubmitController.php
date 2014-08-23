<?php

class SubmitController extends BaseController {
    public static function getSubmitData()
    {            
        $data = User::getSubmitData();
        return View::make('pages.submit', array('data' => $data));
    }
    
    public function insertSalary(){
        $data = Input::all();
        User::insertSalary($data);
    }
}