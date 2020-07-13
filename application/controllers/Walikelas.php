<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walikelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Uangkas_model', 'uangkas');
    }
    public function index()
    {
        $data['title'] = "Home";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pemasukan'] = $this->db->get('pemasukan')->result_array();
        $data['pengeluaran'] = $this->db->get('pengeluaran')->result_array();
        $data['riwayatpemasukan'] = $this->uangkas->foreachpemasukan();
        $data['riwayatpengeluaran'] = $this->uangkas->foreachpengeluaran();
        $data['totalpemasukan'] = $this->uangkas->totalpemasukan();
        $data['totalpengeluaran'] = $this->uangkas->totalpengeluaran();
        $data['saldo'] = $this->uangkas->saldokas();
        $data['useraktif'] = $this->db->count_all('user');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function laporankaskelas()
    {
        $data['title'] = "Laporan Kas Kelas";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pemasukan'] = $this->db->get('pemasukan')->result_array();
        $data['pengeluaran'] = $this->db->get('pengeluaran')->result_array();

        $this->load->view('templates/pemasukan_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/laporankaskelas', $data);
        $this->load->view('templates/pemasukan_footer', $data);
    }
}
