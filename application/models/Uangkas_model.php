<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uangkas_model extends CI_Model
{
    public function foreachPemasukan()
    {
        $query =  $this->db->query("SELECT * FROM pemasukan ORDER BY id DESC")->result_array(2);
        return $query;
    }

    public function foreachPengeluaran()
    {
        $query =  $this->db->query("SELECT * FROM pengeluaran ORDER BY id DESC")->result_array(2);
        return $query;
    }
    public function totalPemasukan()
    {
        $this->db->select_sum('jumlah');
        $query = $this->db->get('pemasukan');
        if ($query->num_rows() > 0) {
            return $query->row()->jumlah;
        } else {
            return 0;
        }
    }

    public function totalPengeluaran()
    {
        $this->db->select_sum('jumlah');
        $query = $this->db->get('pengeluaran');
        if ($query->num_rows() > 0) {
            return $query->row()->jumlah;
        } else {
            return 0;
        }
    }

    public function saldokas()
    {
        $this->db->select_sum('jumlah');
        $query = $this->db->get('pemasukan');
        if ($query->num_rows() > 0) {
            $saldomasuk = $query->row()->jumlah;
        } else {
            return 0;
        }

        $this->db->select_sum('jumlah');
        $query = $this->db->get('pengeluaran');
        if ($query->num_rows() > 0) {
            $saldokeluar = $query->row()->jumlah;
        } else {
            return 0;
        }

        $saldo = $saldomasuk - $saldokeluar;
        return $saldo;
    }

    public function nomor()
    {
        $this->db->select('nomor');
        $this->db->order_by('nomor DESC');
        $query = $this->db->get('pemasukan');
        return $query->result_array();
    }

    public function getPemasukanId($id)
    {
        return $this->db->get_where('pemasukan', ['id' => $id])->row_array();
    }

    public function tambahpemasukan()
    {
        $nomor = $this->input->post('nomor');
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');

        $this->db->query("INSERT INTO pemasukan (nomor, tanggal, nama, jumlah) VALUES ('$nomor', '$tanggal','$nama','$jumlah')");
    }

    public function editpemasukan()
    {
        $data = [
            "nomor" => $this->input->post('nomor', true),
            "tanggal" => $this->input->post('tanggal', true),
            "nama" => $this->input->post('nama', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemasukan', $data);
    }

    public function hapuspemasukan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pemasukan');
    }

    public function getPengeluaranId($id)
    {
        return $this->db->get_where('pengeluaran', ['id' => $id])->row_array();
    }

    public function tambahpengeluaran()
    {
        $nomor = $this->input->post('nomor');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');

        $this->db->query("INSERT INTO pengeluaran (nomor, tanggal, jumlah, keterangan) VALUES ('$nomor', '$tanggal','$jumlah','$keterangan')");
    }

    public function editpengeluaran()
    {
        $data = [
            "nomor" => $this->input->post('nomor', true),
            "tanggal" => $this->input->post('tanggal', true),
            "jumlah" => $this->input->post('jumlah', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengeluaran', $data);
    }

    public function hapuspengeluaran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengeluaran');
    }
}
