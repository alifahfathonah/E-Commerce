<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'JOENFLORIST';
        $data['acara'] = $this->db->get('acara')->result_array();

        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $data['jenis'] = $this->db->get('jenis_produk')->result_array();
        $data['jenis'] = $this->db->get('jenis_produk')->result_array();
        $id_acara = $this->input->post('id_acara');
        $id_jenis = $this->input->post('id_jenis');
        $data['hasil'] = $this->Produk_model->pencarian_d($id_acara, $id_jenis)->result_array();
        $this->load->view("templates/header", $data);
        $this->load->view("Home/index", $data);
        $this->load->view("templates/footer");
    }


    public function detailpromo($id_promo = '')
    {


        if ($id_promo) {
            $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
            $data['acara'] = $this->db->get('acara')->result_array();
            $data['jenis'] = $this->db->get('jenis_produk')->result_array();
            $data['produk'] = $this->Produk_model->getPromoById($id_promo);
            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/header", $data);
            $this->load->view("Home/detailpromo", $data);
            $this->load->view("templates/footer");
        } else {
            $this->load->view('error/error');
        }
    }



    public function detailproduk($id_produk = '')
    {


        if ($id_produk) {
            $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
            $data['acara'] = $this->db->get('acara')->result_array();
            $data['jenis'] = $this->db->get('jenis_produk')->result_array();
            $data['produk'] = $this->Produk_model->getProdukById($id_produk);
            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/header", $data);
            $this->load->view("Home/detailproduk", $data);
            $this->load->view("templates/footer");
        } else {
            $this->load->view('error/error');
        }
    }


    public function syarat()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Syarat");
        $this->load->view("templates/footer");
    }
    public function produkwedding()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list_wedding($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }
    public function produk()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }

    public function produkkotak()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();

        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list_kotak($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }

    public function produkhandbouqet()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list_handbouqet($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }


    public function produkgraduation()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list_graduation($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }


    public function produksymphaty()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();

        $config['base_url'] = site_url('home/produk'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel produk_model. 
        $data['data'] = $this->Produk_model->get_produk_list_symphaty($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view("templates/header", $data);
        $this->load->view("templates/side");
        $this->load->view("Home/Produk");
        $this->load->view("templates/footer");
    }
    public function pencarianproduk()
    {
        $data['title'] = 'JOENFLORIST';
        $data['promo'] = $this->db->query("SELECT * FROM promo ORDER BY id_promo DESC")->result_array();
        $data['acara'] = $this->db->get('acara')->result_array();
        $data['jenis'] = $this->db->get('jenis_produk')->result_array();
        $id_acara = $this->input->post('id_acara');
        $id_jenis = $this->input->post('id_jenis');
        $data['hasil'] = $this->Produk_model->pencarian_d($id_acara, $id_jenis)->result_array();
        $this->load->view("templates/header", $data);
        $this->load->view("Home/index", $data);
        $this->load->view("templates/footer");
    }
}
