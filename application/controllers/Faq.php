<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('common_helper');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('faq/index');
        $this->load->view('footer');
    }
}