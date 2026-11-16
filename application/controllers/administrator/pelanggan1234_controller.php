<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan1234_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('pelanggan1234_model');
    }

    public function index() {
        $data['list_pelanggan'] = $this->pelanggan1234_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/pelanggan/index',$data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_pelanggan() {
        $data['title'] = 'Tambah Pelanggan';
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('email_pelanggan', 'Email', 'required|valid_email');
            if ($this->form_validation->run() !== FALSE) {
                $this->_simpan_pelanggan();
            } 

            else {
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/pelanggan/tambah_pelanggan');
                $this->load->view('administrator/templates/footer');
            }
    }

    private function _simpan_pelanggan() {
        $data = [
            'nama' => ($this->input->post('nama_pelanggan')),
            'email' => ($this->input->post('email_pelanggan')),
            'telepon' => ($this->input->post('telepon_pelanggan')),
            'alamat' => ($this->input->post('alamat_pelanggan')),
            'tanggal_daftar' => ($this->input->post('tanggal_daftar_pelanggan'))
        ];

        $simpan = $this->pelanggan1234_model->tambah($data);
            if ($simpan) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Berhasil Tambah Pelanggan-!
                    </div>
                </div>
                ');
            } 

            else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Gagal Tambah Pelanggan-!
                    </div>
                </div>
                ');
            }

        redirect('admin/pelanggan');
    }

    public function hapus_pelanggan($id) {
        $pelanggan = $this->pelanggan1234_model->get_by_id($id);
        if ($pelanggan) {
            $hapus = $this->pelanggan1234_model->hapus($id);
                if ($hapus) {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Berhasil Hapus Pelanggan-!
                        </div>
                    </div>
                    ');
                } 

                else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Gagal Hapus Pelanggan-!
                        </div>
                    </div>
                    ');
                }
                    redirect('admin/pelanggan');

        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Pelanggan Tidak Ditemukan-!
                </div>
            </div>
            ');

            redirect('admin/pelanggan');
        }
    }

    public function ubah_pelanggan($id) {
        $pelanggan = $this->pelanggan1234_model->get_by_id($id);
        if ($pelanggan) {
            $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
            $this->forrm_validation->set_rules('email_pelanggan', 'Email', 'required|valid_email');
                if ($this->form_validation->run() !== FALSE) {
                    $this->_ubah_pelanggan($id);
                } 

                else {
                    $data['title'] = 'Ubah Pelanggan';
                    $data['pelanggan'] = $pelanggan;
                    $this->load->view('administrator/templates/header', $data);
                    $this->load->view('administrator/templates/sidebar');
                    $this->load->view('administrator/pelanggan/ubah_pelanggan', $data);
                    $this->load->view('administrator/templates/footer');
                }
        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    Pelanggan Tidak Ditemukan-!
                </div>
            </div>
            ');
            redirect('admin/pelanggan');
        }
    }

    private function _ubah_pelanggan($id) {
        $data = [
            'nama' => $this->input->post('nama_pelanggan'),
            'email' => $this->input->post('email_pelanggan'),
            'telepon' => $this->input->post('telepon_pelanggan'),
            'alamat' => $this->input->post('alamat_pelanggan'),
            'tanggal_daftar' => $this->input->post('tanggal_daftar_pelanggan')
        ];

        $ubah = $this->pelanggan1234_model->ubah($id, $data);
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Ubah Pelanggan-!
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal Ubah Pelanggan!
            </div>
            ');
        }

        redirect('admin/pelanggan');
    }
}
