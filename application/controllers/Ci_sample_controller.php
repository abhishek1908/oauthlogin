<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Ci_sample_controller extends CI_Controller {

         public function __construct() {
               parent::__construct();
         }

         //This is Default function of controller
         public function index() {
            //Loading view file ci_sample_view.php
            $this->load->view('ci_sample_view');
         }

         public function Hello() {
             //Loading view file ci_sample_view.php
             $this->load->view('ci_sample_view');
         }

    }
?>

