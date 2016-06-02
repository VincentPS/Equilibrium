<?php

class TestController extends Controller
{
	public function index(){
		$this->View->render('test/index');
	}
}
