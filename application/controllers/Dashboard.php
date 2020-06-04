<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/nav", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("dashboard/index");
            $this->load->view("templates/foot");
        }
    }

    public function produk()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['produk'] =  $this->db->query("select *from acara,produk,jenis_produk where acara.id_acara=produk.id_acara and jenis_produk.id_jenis=produk.id_jenis")->result_array();
            $data['acara'] = $this->db->get('acara')->result_array();
            $data['jenis'] = $this->db->get('jenis_produk')->result_array();

            $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            $this->form_validation->set_rules('harga_produk', 'harga_produk', 'required|numeric');
            $this->form_validation->set_rules('id_acara', 'id_acara', 'required');
            $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');


            if ($this->form_validation->run() ==  false) {
                $data['title'] = "JOENFLORIST";
                $this->load->view("templates/nav", $data);
                $this->load->view("templates/sidebar");
                $this->load->view("dashboard/produk");
                $this->load->view("templates/foot");
            } else {
                $data = [
                    'nama_produk' => htmlspecialchars($this->input->post('nama_produk')),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
                    'harga_produk' => htmlspecialchars($this->input->post('harga_produk')),
                    'id_acara' => htmlspecialchars($this->input->post('id_acara')),
                    'id_jenis' => htmlspecialchars($this->input->post('id_jenis'))
                ];


                // cek jika ada gambar yang akan diupload
                $upload_image = $_FILES['berkas']['name'];

                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                    $config['max_size']      = '5048';
                    $config['upload_path'] = './assets/imgproduk/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('berkas')) {
                        $old_image = $data['imgproduk']['gambar'];
                        if ($old_image != 'baju.jpg') {
                            unlink(FCPATH . 'assets/imgproduk/' . $old_image);
                        }
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $this->db->insert('produk', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Telah Berhasil DiTambahkan</div>');
                redirect('dashboard/produk');
            }
        }
    }

    public function detailproduk($id_produk = '')
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['acara'] = $this->db->get('acara')->result_array();
            $data['jenis'] = $this->db->get('jenis_produk')->result_array();

            $data['produk'] = $this->Produk_model->getProdukById($id_produk);

            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/nav", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("dashboard/detailproduk", $data);
            $this->load->view("templates/foot");
        }
    }

    public function editproduk()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $id_produk = htmlspecialchars($this->input->post('id_produk'));
            $nama_produk = htmlspecialchars($this->input->post('nama_produk'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $harga_produk = htmlspecialchars($this->input->post('harga_produk'));
            $id_acara = htmlspecialchars($this->input->post('id_acara'));
            $id_jenis = htmlspecialchars($this->input->post('id_jenis'));

            $gambar = $this->input->post('berkas');

            $data = array(
                'id_produk' => $id_produk,
                'nama_produk' => $nama_produk,
                'deskripsi' => $deskripsi,
                'harga_produk' => $harga_produk,
                'id_acara' => $id_acara,
                'id_jenis' => $id_jenis,


            );
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['berkas']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/imgproduk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $old_image = $data['imgproduk']['gambar'];

                    if ($old_image != 'baju.jpg') {
                        unlink(FCPATH . 'assets/imgproduk/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $where = array(
                'id_produk' => $id_produk
            );
            $this->Produk_model->ubahDataProduk($where, $data, 'produk');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Telah Berhasil Dirubah</div>');
            redirect('dashboard/produk');
        }
    }


    public function hapusproduk($id_produk)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            // $this->db->where('id', $id);
            $this->session->set_flashdata('flash', 'Dihapus');

            $this->db->delete('produk', ['id_produk' => $id_produk]);
            redirect('dashboard/produk');
        }
    }

    public function admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $data['title'] = "JOENFLORIST";
            $data['admin'] = $this->db->get('user')->result_array();
            $this->load->view("templates/nav", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("dashboard/admin", $data);
            $this->load->view("templates/foot");
        }
    }
    public function hapusadmin($id_user)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            // $this->db->where('id', $id);
            $this->session->set_flashdata('flash', 'Dihapus');

            $this->db->delete('user', ['id_user' => $id_user]);
            redirect('dashboard/admin');
        }
    }



    public function promo()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
            $this->form_validation->set_rules('harga_awal', 'harga_awal', 'required|numeric');
            $this->form_validation->set_rules('harga_akhir', 'harga_akhir', 'required|numeric');


            if ($this->form_validation->run() ==  false) {
                $data['title'] = "JOENFLORIST";
                $data['promo'] = $this->db->get('promo')->result_array();
                $this->load->view("templates/nav", $data);
                $this->load->view("templates/sidebar");
                $this->load->view("dashboard/promo");
                $this->load->view("templates/foot");
            } else {
                $data = [
                    'nama_produk' => htmlspecialchars($this->input->post('nama_produk')),
                    'harga_awal' => htmlspecialchars($this->input->post('harga_awal')),
                    'harga_akhir' => htmlspecialchars($this->input->post('harga_akhir'))
                ];


                // cek jika ada gambar yang akan diupload
                $upload_image = $_FILES['berkas']['name'];

                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                    $config['max_size']      = '5048';
                    $config['upload_path'] = './assets/imgproduk/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('berkas')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
                $this->db->insert('promo', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Promo Telah Berhasil DiTambahkan</div>');
                redirect('dashboard/promo');
            }
        }
    }
    public function hapuspromo($id_promo)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            // $this->db->where('id', $id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Promo Telah Berhasil Dihapus</div>');


            $this->db->delete('promo', ['id_promo' => $id_promo]);
            redirect('dashboard/promo');
        }
    }

    public function detailpromo($id_promo = '')
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $data['produk'] = $this->Produk_model->getPromoById($id_promo);

            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/nav", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("dashboard/detailpromo", $data);
            $this->load->view("templates/foot");
        }
    }


    public function editpromo()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {

            $id_promo = htmlspecialchars($this->input->post('id_promo'));
            $nama_produk = htmlspecialchars($this->input->post('nama_produk'));
            $harga_awal = htmlspecialchars($this->input->post('harga_awal'));
            $harga_akhir = htmlspecialchars($this->input->post('harga_akhir'));

            $gambar = $this->input->post('berkas');

            $data = array(
                'id_promo' => $id_promo,
                'nama_produk' => $nama_produk,
                'harga_awal' => $harga_awal,
                'harga_akhir' => $harga_akhir

            );
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['berkas']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/imgproduk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $old_image = $data['imgproduk']['gambar'];

                    if ($old_image != 'baju.jpg') {
                        unlink(FCPATH . 'assets/imgproduk/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $where = array(
                'id_promo' => $id_promo
            );
            $this->Produk_model->ubahDataPromo($where, $data, 'promo');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Promo Telah Berhasil Dirubah</div>');
            redirect('dashboard/promo');
        }
    }






    public function logout()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $this->session->unset_userdata('email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');

            redirect('auth/');
        }
    }
}
