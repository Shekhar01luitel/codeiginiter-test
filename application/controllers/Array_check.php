
<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Post Controller
 */
class Array_check extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('check/check');
	}
	public function list()
	{

		$this->load->library('form_validation');
		$array_element = $this->input->post('array_element');

		// $this->form_validation->set_rules('array_element', 'Array Element', 'integer|required');
		$this->form_validation->set_rules('array_element', 'Array Element', 'integer|required');

		if (!empty($array_element)) {
			if ($this->form_validation->run()) {
				// Form data is valid
				echo "Form data is valid";
				$this->load->view('check/list', compact("array_element"));
			} else {
				echo "Array must be integer is empty.";
				$this->load->view('check/check');
			}
		} else {
			$this->load->view('check/check');
			echo "Array element is empty.";
		}
	}

	public function arraycheck()
	{
		// Sample array
		$myArray = array("apple", "banana", "cherry", "date", "fig");
		
		$element = readline("Enter the element to search for: ");

		if (in_array($element, $myArray)) {
			$elementIndex = array_search($element, $myArray);
			if ($elementIndex !== false) {
				echo "The element '$element' is at position $elementIndex in the array.\n";
			}
		} else {
			echo "The element '$element' does not exist in the array.\n";
		}
	}
}
