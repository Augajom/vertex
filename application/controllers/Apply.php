<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('common_helper');
    }

    public function index() {
        redirect(site_root_url('services#apply'));
    }
}