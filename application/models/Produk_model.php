<?php
class Produk_model extends CI_Model
{

    //ambil data mahasiswa dari database
    function get_produk_list_wedding($limit, $start)
    {
        $query = $this->db->query('select *from produk where id_acara="7"', $limit, $start);
        return $query;
    }
    function get_produk_list_symphaty($limit, $start)
    {
        $query = $this->db->query('select *from produk where id_acara="10"', $limit, $start);
        return $query;
    }
    function get_produk_list_graduation($limit, $start)
    {
        $query = $this->db->query('select *from produk where id_acara="6"', $limit, $start);
        return $query;
    }
    function get_produk_list_handbouqet($limit, $start)
    {
        $query = $this->db->query('select *from produk where id_jenis="16"', $limit, $start);
        return $query;
    }
    function get_produk_list_kotak($limit, $start)
    {
        $query = $this->db->query('select *from produk where id_jenis="3"', $limit, $start);
        return $query;
    }

    function get_produk_list($limit, $start)
    {
        $query = $this->db->get('produk', $limit, $start);
        return $query;
    }


    public function getPromoById($id_promo)
    {
        return $this->db->get_where('promo', ['id_promo' => $id_promo])->row_array();
    }
    public function ubahDataPromo($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }






    public function getProdukById($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
    }
    public function ubahDataProduk($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function pencarian_d($id_acara, $id_jenis)
    {
        if ($id_acara && $id_jenis != null) {
            $this->db->where("id_acara", $id_acara);
            $this->db->where("id_jenis", $id_jenis);
            return $this->db->get("produk");
        } else {
            return $this->db->query("SELECT*FROM produk LIMIT 16");
        }
    }
}
