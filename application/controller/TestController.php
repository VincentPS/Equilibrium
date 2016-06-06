<?php

class TestController extends Controller
{
	public function index(){
		$this->View->renderGame('test/index');
	}
}
