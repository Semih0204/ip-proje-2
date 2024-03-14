<?php

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model("Product_Category_Model");
		$items = $this->Product_Category_Model->getAll();

		$viewData = new stdClass();
		$viewData->items = $items;
		$this->load->view("welcome_message", $viewData);
	}
}




?>