<?php
    class Admin_model extends CI_Model{
        public function tampildata($table, $urut_id){
            return $this->db->from($table)
                        ->order_by($urut_id, 'DESC')
                        ->get('');
        }

        public function simpandata($table, $data){
            return $this->db->insert($table, $data);
        }
        public function hapusdata($table,$id,$primary){
            return $this->db->delete($table,array($primary=>$id));
        }
        public function formedit($table, $primary, $id){
            return $this->db->get_where($table, array($primary=>$id))->row();

        }
        public function editdata($table, $primary, $id, $data){
            return $this->db->where($primary, $id)
                            ->update($table, $data);
        }
        // public function jointj(){
        //     $query = $this->db->select('*')
        //                     ->from('tbl_ekspedisi')
        //                     ->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.tujuan_ekspedisi','left')
        //                     ->order_by('id_ekspedisi','DESC')
        //                     ->get();
        //     return $query;
        // }
        public function joineks(){
            $query = $this->db->select('*')
                            ->from('tbl_ekspedisi')
                            ->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left')
                            ->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left')
                            ->order_by('id_ekspedisi','DESC')
                            ->get();
            return $query;
        }
        public function comboboxdinamis(){
            $query=$this->db->get('tbl_petugas');
            $tambah[set_value('id_petugas')]="~~~~ Pilih Petugas ~~~~";
            if ($query->num_rows()>0) {
                foreach($query->result() as $row){
                    $tambah[$row->id_petugas]=$row->nama_petugas;
                }
            }
            return $tambah;
        }
        public function comboboxdinamistj(){
            $query=$this->db->get('tbl_tujuan');
            $tambah[set_value('id_tujuan')]="~~~~ Pilih Tujuan ~~~~";
            if ($query->num_rows()>0) {
                foreach($query->result() as $row){
                    $tambah[$row->id_tujuan]=$row->tujuan_ekspedisi;
                }
            }
            return $tambah;
        }
        //LAPORAN
        public function view_by_date($date){
            $this->db->where('DATE(tgl_pinjam)', $date); // Tambahkan where tanggal nya
            $this->db->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left');
            $this->db->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left');
            
            return $this->db->get('tbl_ekspedisi')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }
        
        public function view_by_month($month, $year){
            $this->db->where('MONTH(tgl_pinjam)', $month); // Tambahkan where bulan
            $this->db->where('YEAR(tgl_pinjam)', $year); // Tambahkan where tahun
            $this->db->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left');
            $this->db->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left');
            
            return $this->db->get('tbl_ekspedisi')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }
        
        public function view_by_year($year){
            $this->db->where('YEAR(tgl_pinjam)', $year); // Tambahkan where tahun
            $this->db->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left');
            $this->db->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left');
            
            return $this->db->get('tbl_ekspedisi')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }
        
        public function view_all(){
            $this->db->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left');
            $this->db->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left');
            return $this->db->get('tbl_ekspedisi')->result(); // Tampilkan semua data transaksi
        }
        
        public function option_tahun(){
            $this->db->select('YEAR(tgl_pinjam) AS tahun'); // Ambil Tahun dari field tgl
            $this->db->from('tbl_ekspedisi'); // select ke tabel transaksi
            $this->db->order_by('YEAR(tgl_pinjam)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
            $this->db->group_by('YEAR(tgl_pinjam)'); // Group berdasarkan tahun pada field tgl
            
            return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
        }
        public function joinlaporan(){
            $query = $this->db->select('*')
                            ->from('tbl_ekspedisi')
                            ->join('tbl_petugas','tbl_ekspedisi.nama_petugas=tbl_petugas.id_petugas','left')
                            ->join('tbl_tujuan','tbl_ekspedisi.tujuan_ekspedisi=tbl_tujuan.id_tujuan','left')
                            ->order_by('id_ekspedisi','DESC')
                            ->get();
            return $query;
        }
        //GRAFIK
        public function grafik($tabel){
            $query=$this->db->select('*')
                        ->from($tabel)
                        ->get('');
                        return $query;
        }
    }

?>