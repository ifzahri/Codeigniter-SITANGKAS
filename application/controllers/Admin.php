<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Uangkas_model', 'uangkas');
    }
    public function index()
    {
        $data['title'] = "Dashboard";
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
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pemasukan()
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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pemasukan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function laporanpemasukan()
    {
        $data['title'] = "Laporan Pemasukan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pemasukan'] = $this->db->get('pemasukan')->result_array();

        $this->load->view('templates/pemasukan_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporanpemasukan', $data);
        $this->load->view('templates/pemasukan_footer', $data);
    }

    public function pengeluaran()
    {
        $data['title'] = "Pengeluaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $result = $this->uangkas->nomor();
        if (empty($result[0]['nomor'])) {
            $no = date('dmY') . "201";
        } else {
            $no = $result[0]['nomor'] + 1;
        }
        $data['nomor'] = $no;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengeluaran', $data);
        $this->load->view('templates/footer', $data);
    }

    public function laporanpengeluaran()
    {
        $data['title'] = "Laporan Pengeluaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pengeluaran'] = $this->db->get('pengeluaran')->result_array();

        $this->load->view('templates/pemasukan_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporanpengeluaran', $data);
        $this->load->view('templates/pemasukan_footer', $data);
    }

    public function role()
    {
        $data['title'] = "Role";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/role_footer', $data);
    }

    public function roleAccess($role_id)
    {
        $data['title'] = "Role Access";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> <strong>Selamat!</strong> Akses telah dirubah. </div> '
        );
    }
}
