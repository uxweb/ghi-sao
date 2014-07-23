<?php

//use SaoGhi\Repositories\ObraRepository;

class PagesController extends BaseController {

	public function home()
	{
        return View::make('pages.home');
	}
}
