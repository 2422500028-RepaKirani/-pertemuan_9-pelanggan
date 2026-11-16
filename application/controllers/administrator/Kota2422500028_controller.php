<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota2422500028_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('Kota2422500028_model');
    }

    public function index() {
        $data['list_kota'] = $this->Kota2422500028_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Kota2422500028/index',$data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota() {
        $data['title'] = 'Tambah kota';
        $this->form_validation->set_rules('nama_kota028', 'Nama kota', 'required');
        $this->form_validation->set_rules('jenis_kota028', 'Jenis kota', 'required');
        $this->form_validation->set_rules('provinsi028', 'Provinsi', 'required');
        $this->form_validation->set_rules('status028', 'Status', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->_simpan_kota();
            } 

            else {
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/Kota2422500028/tambah_kota');
                $this->load->view('administrator/templates/footer');
            }
    }

    private function _simpan_kota() {
        $data = [
            'nama_kota028' => ($this->input->post('nama_kota028', true)),
            'jenis_kota028' => ($this->input->post('jenis_kota028', true)),
            'provinsi028' => ($this->input->post('provinsi028', true)),
            'status028' => ($this->input->post('status028', true))
        ];

        $simpan = $this->Kota2422500028_model->tambah($data);
            if ($simpan) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Berhasil Tambah kota-!
                    </div>
                </div>
                ');
            } 

            else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <div>
                        Gagal Tambah kota-!
                    </div>
                </div>
                ');
            }

        redirect('admin/Kota2422500028');
    }

    public function hapus_kota($id) {
        $kota = $this->Kota2422500028_model->get_by_id($id);
        if ($kota) {
            $hapus = $this->Kota2422500028_model->hapus($id);
                if ($hapus) {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Berhasil Hapus kota-!
                        </div>
                    </div>
                    ');
                } 

                else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            Gagal Hapus kota-!
                        </div>
                    </div>
                    ');
                }
                    redirect('admin/Kota2422500028');

        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    kota Tidak Ditemukan-!
                </div>
            </div>
            ');

            redirect('admin/Kota2422500028');
        }
    }

    public function ubah_kota($id) {
        $kota = $this->Kota2422500028_model->get_by_id($id);
        if ($kota) {
            $this->form_validation->set_rules('nama_kota', 'Nama kota', 'required');
            $this->form_validation->set_rules('jenis_kota', 'jenis kota', 'required');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
            $this->form_validation->set_rules('status_kota', 'Status kota', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $this->_ubah_kota($id);
                } 

                else {
                    $data['title'] = 'Ubah kota';
                    $data['kota'] = $kota;
                    $this->load->view('administrator/templates/header', $data);
                    $this->load->view('administrator/templates/sidebar');
                    $this->load->view('administrator/Kota2422500028/ubah_kota', $data);
                    $this->load->view('administrator/templates/footer');
                }
        } 

        else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                    kota Tidak Ditemukan-!
                </div>
            </div>
            ');
            redirect('admin/Kota2422500028');
        }
    }

    private function _ubah_kota($id) {
        $data = [
            'nama_kota028' => ($this->input->post('nama_kota')),
            'jenis_kota028' => ($this->input->post('jenis_kota')),
            'provinsi028' => ($this->input->post('provinsi')),
            'status028' => ($this->input->post('status_kota'))
        ];

        $ubah = $this->Kota2422500028_model->ubah($id, $data); 
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Ubah kota-!
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal Ubah kota!
            </div>
            ');
        }

        redirect('admin/Kota2422500028');
    }
}
