<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    if($this->ion_auth->isAdmin()) {
	        $data['admin'] = TRUE;
	        $data['admin_link'] = '/auth';
        } else {
            $data['admin'] = FALSE;
        }
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
