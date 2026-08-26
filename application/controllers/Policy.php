<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('common_helper');
    }

    public function index($tab = '') {
        $data['active_tab'] = $tab ? $tab : 'gov';
        $this->load->view('header', $data);
        $this->load->view('policy/index', $data);
        $this->load->view('footer', $data);
    }
}