<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Website ini dibuat dan dikembangkan oleh awbimasakti
// Nama Template : OnlineShop Non-Courir
// Pencipta      : AWBimasakti and Yusuf1bimasakti
// Author        : PT. Bimasakti Indera Gemilang
// Creator       : https://ilmuparanormal.com

class Home extends CI_Controller
{

    public function index()
    {
        $sett_web   = $this->db->get_where('tbl_sett_topbar')->row_array();
        $data = array(
            'sett_web' => $sett_web
        );
        $this->load->view('home/include/index', $data);
    }
}
        
    /* End of file  Home.php */
