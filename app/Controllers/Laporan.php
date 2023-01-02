<?php

namespace App\Controllers;

use \App\Models\CheckinModel;
use \App\Models\HotelModel;
use \App\Models\KamarModel;
use \App\Models\PegawaiModel;
use \App\Models\TipekamarModel;
use \App\Models\TamuModel;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends BaseController
{
    protected $checkinModel;
    protected $hotelModel;
    protected $kamarModel;
    protected $pegawaiModel;
    protected $tamuModel;
    protected $tipekamarModel;

    public function __construct()
    {
        $this->checkinModel =  new CheckinModel();
        $this->hotelModel =  new HotelModel();
        $this->kamarModel =  new KamarModel();
        $this->tamuModel =  new TamuModel();
        $this->tipekamarModel =  new TipekamarModel();
        // $this->load->library('Pdf');
    }
    public function index()
    {
        $data = [
            'title' => 'Laporan Data'
        ];

        return view('laporan/index', $data);
    }
    //     public function checkin()
    //     {
    //         $data['checkin'] = $this->db->get('checkin')->result();
    //         $this->load->view('laporan/index', $data);
    //     }
    //     public function hotel()
    //     {
    //         $data['hotel'] = $this->db->get('hotel')->result();
    //         $this->load->view('laporan/index', $data);
    //     }
}
