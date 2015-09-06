<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model('course');
	}

	public function index() 
	{
		$allCourses = $this->course->retrieveAll();
		$this->load->view('home', array('allCourses' => $allCourses));
	}

	public function addCourse()
	{
		$this->course->add($this->input->post('name'), $this->input->post('description'));
		redirect('/');
	}

	public function delete($id)
	{
		$this->course->delete($id);
		redirect('/');
	}

	public function show($id)
	{
		$result = $this->course->retrieveOne($id);
		$this->load->view('show', array('oneCourse' => $result));
	}
	
}