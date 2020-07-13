<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uangkas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uangkas_model', 'uangkas');
    }

    public function tambahpemasukan()
    {
        $data['title'] = "Pemasukan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nama'] = $this->db->get('user')->result_array();

        $result = $this->uangkas->nomor();
        if (empty($result[0]['nomor'])) {
            $no = date('Y') . "101";
        } else {
            $no = $result[0]['nomor'] + 1;
        }
        $data['nomor'] = $no;

        $this->form_validation->set_rules('nomor', 'Nomor', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pemasukan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->uangkas->tambahpemasukan();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan.</div>');
            redirect('admin/pemasukan');
        }
    }

    public function editpemasukan($id)
    {
        $data['title'] = "Pemasukan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama'] = $this->db->get('user')->result_array();

        $data['edit'] = $this->uangkas->getPemasukanId($id);

        $this->form_validation->set_rules('nomor', 'Nomor', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editpemasukan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->uangkas->editpemasukan();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan.</div>');
            redirect('admin/laporanpemasukan');
        }
    }

    public function hapuspemasukan($id)
    {
        $this->uangkas->hapuspemasukan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/laporanpemasukan');
    }

    public function tambahpengeluaran()
    {
        $data['title'] = "Pemasukan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nomor', 'Nomor', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pengeluaran', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->uangkas->tambahpengeluaran();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan.</div>');
            redirect('admin/pengeluaran');
        }
    }

    public function editpengeluaran($id)
    {
        $data['title'] = "Edit Pengeluaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama'] = $this->db->get('user')->result_array();

        $data['edit'] = $this->uangkas->getPengeluaranId($id);

        $this->form_validation->set_rules('nomor', 'Nomor', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editpengeluaran', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->uangkas->editpengeluaran();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan.</div>');
            redirect('admin/laporanpengeluaran');
        }
    }

    public function hapuspengeluaran($id)
    {
        $this->uangkas->hapuspengeluaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/laporanpengeluaran');
    }
}
