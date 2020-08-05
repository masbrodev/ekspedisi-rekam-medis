<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        if (empty($this->session->userdata('username')) AND empty($this->session->userdata('password'))) {
            redirect('login');
        } else {
            $nama_lengkap=$this->session->userdata('nama_lengkap');
        }
        
    }
	public function index(){
                $judul['atas']="Halaman Utama";
                $judul['menuatas']="Beranda";
                $data['p']=$this->db->get('tbl_pasien')->num_rows();
                $data['e']=$this->db->get('tbl_ekspedisi')->num_rows();
                $data['pe']=$this->db->get('tbl_petugas')->num_rows();
                $data['t']=$this->db->get('tbl_tujuan')->num_rows();
                $this->load->view('template/header',$judul);
                $this->load->view('beranda',$data);
                $this->load->view('template/footer');
        }
        
        public function pasien(){
                $judul['atas']="Halaman Pasien";
                $judul['menuatas']="Pasien";
                $data['pa']=$this->Admin_model->tampildata('tbl_pasien','id_pasien');
                $this->load->view('template/header',$judul);
                $this->load->view('pasien',$data);
                $this->load->view('template/footer');
        }

        public function tambah_pasien(){
                $judul['atas']="Halaman Tambah Pasien";
                $judul['menuatas']="Form Pasien";
                $this->load->view('template/header',$judul);
                $this->load->view('form_pasien');
                $this->load->view('template/footer');
        }
    
        public function simpan_pasien(){
                $this->form_validation->set_rules('no_rm','','required',array('required'=>'No. RM Wajib Di Isi'));
                $this->form_validation->set_rules('nama_pasien','','required',array('required'=>'Nama Pasien Wajib Di Isi'));
                $this->form_validation->set_rules('jk','','required',array('required'=>'Jenis Kelamin Wajib Di Isi'));
                // $this->form_validation->set_rules('nik','','required',array('required'=>'NIK Wajib Di Isi'));
                $this->form_validation->set_rules('alamat','','required',array('required'=>'Alamat Wajib Di Isi'));
                // $this->form_validation->set_rules('no_telp','','required',array('required'=>'No. Telp Wajib Di Isi'));
                if ($this->form_validation->run()==FALSE) {
                    $judul['atas']="Halaman Tambah Pasien";
                    $judul['menuatas']="Form Pasien";
                    $this->load->view('template/header',$judul);
                    $this->load->view('form_pasien');
                    $this->load->view('template/footer');
                } else {
                    $data = array(
                        'no_rm'=>$this->input->post('no_rm'),
                        'nama_pasien'=>$this->input->post('nama_pasien'),
                        'jenis_kelamin'=>$this->input->post('jk'),
                        'nik'=>$this->input->post('nik'),
                        'alamat'=>$this->input->post('alamat'),
                        'no_telp'=>$this->input->post('no_telp')
                    );
                    $query = $this->Admin_model->simpandata('tbl_pasien',$data);
        
                        if ($query) {
                            $this->session->set_flashdata('info','Data Pasien Berhasil Tersimpan');
                            redirect('Admin/pasien');
                        } else {
                            $this->session->set_flashdata('info','Data Pasien Gagal Tersimpan');
                            redirect('Admin/pasien');
                        }
                }
            }
        
            public function hapuspasien($id){
                $this->Admin_model->hapusdata('tbl_pasien',$id,'id_pasien');
                if ($this->db->affected_rows()) {
                    $this->session->set_flashdata('info','Data Pasien Berhasil Terhapus');
                    redirect('Admin/pasien');
                } else {
                    $this->session->set_flashdata('info','Data Pasien Gagal Terhapus');
                    redirect('Admin/pasien');
                }
            }

            public function formedit_pasien($id){
                $judul['atas']="Halaman Form Edit Pasien";
                $judul['menuatas']="Form Edit Pasien";
                $data['pa']=$this->Admin_model->formedit('tbl_pasien','id_pasien',$id);
                $this->load->view('template/header',$judul);
                $this->load->view('formedit_pasien',$data);
                $this->load->view('template/footer');
        }

        public function edit_pasien(){
            $id=$this->input->post('id');
            $data= array(
                'no_rm'=>$this->input->post('no_rm'),
                'jenis_kelamin'=>$this->input->post('jk'),
                'nama_pasien'=>$this->input->post('nama_pasien'),
                'alamat'=>$this->input->post('alamat'),
                'nik'=>$this->input->post('nik'),
                'no_telp'=>$this->input->post('no_telp')
            );
            $query = $this->Admin_model->editdata('tbl_pasien','id_pasien', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data Pasien Berhasil Teredit');
                    redirect('Admin/pasien');
                } else {
                    $this->session->set_flashdata('info','Data Pasien Gagal Teredit');
                    redirect('Admin/pasien');
                }
        }

        public function ekspedisi(){
                $judul['atas']="Halaman Ekspedisi";
                $judul['menuatas']="Ekspedisi";
                $data['eks']=$this->Admin_model->joineks();
                // $data['tj']=$this->Admin_model->jointj();
                $this->load->view('template/header',$judul);
                $this->load->view('ekspedisi',$data);
                $this->load->view('template/footer');
        }
        

        public function tambah_ekspedisi(){
            $judul['atas']="Halaman Tambah Ekspedisi";
            $judul['menuatas']="Form Ekspedisi";
            $data['combo']=$this->Admin_model->comboboxdinamis();
            $data['combotj']=$this->Admin_model->comboboxdinamistj();
            $data['error']="";
            $this->load->view('template/header',$judul);
            $this->load->view('form_ekspedisi',$data);
            $this->load->view('template/footer');
    }

    public function simpan_ekspedisi(){
        $this->form_validation->set_rules('no_rm','','required',array('required'=>'No. RM Wajib Di Isi'));
        $this->form_validation->set_rules('nama_pasien','','required',array('required'=>'Nama Pasien Wajib Di Isi'));
        $this->form_validation->set_rules('jenis_layanan','','required',array('required'=>'Jenis Layanan Wajib Di Isi'));
        $this->form_validation->set_rules('nama_peminjam','','required',array('required'=>'Nama Peminjam Wajib Di Isi'));
        // $this->form_validation->set_rules('kepentingan','','required',array('required'=>'Kepentinagn Wajib Di Isi'));
        // $this->form_validation->set_rules('tj','','required',array('required'=>'Tujuan Akspedisi Wajib Di Isi'));
        $this->form_validation->set_rules('nama_petugas','','required',array('required'=>'Nama Petugas Wajib Di Isi'));
        // $this->form_validation->set_rules('tgl_pinjam','','required',array('required'=>'Tgl Pinjam Wajib Di Isi'));
        // $this->form_validation->set_rules('tgl_kembali','','required',array('required'=>'Tgl Kembali Wajib Di Isi'));
        if ($this->form_validation->run()==FALSE) {
            $judul['atas']="Halaman Tambah Ekspedisi";
            $judul['menuatas']="Form Ekspedisi";
            $data['combo']=$this->Admin_model->comboboxdinamis();
            $data['combotj']=$this->Admin_model->comboboxdinamistj();
            $data['error']="";
            $this->load->view('template/header',$judul);
            $this->load->view('form_ekspedisi',$data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'no_rm'=>$this->input->post('no_rm'),
                'nama_pasien'=>$this->input->post('nama_pasien'),
                'jenis_layanan'=>$this->input->post('jenis_layanan'),
                'nama_peminjam'=>$this->input->post('nama_peminjam'),
                'kepentingan'=>$this->input->post('kepentingan'),
                'tujuan_ekspedisi'=>$this->input->post('tujuan_ekspedisi'),
                'nama_petugas'=>$this->input->post('nama_petugas'),
                'tgl_pinjam'=>$this->input->post('tgl_pinjam'),
                'tgl_kembali'=>$this->input->post('tgl_kembali')
            );
            $query = $this->Admin_model->simpandata('tbl_ekspedisi',$data);

                if ($query) {
                    $this->session->set_flashdata('info','Data Ekspedisi Berhasil Tersimpan');
                    redirect('Admin/ekspedisi');
                } else {
                    $this->session->set_flashdata('info','Data Ekspedisi Gagal Tersimpan');
                    redirect('Admin/ekspedisi');
                }
        }
    }

    public function hapusekspedisi($id){
        $this->Admin_model->hapusdata('tbl_ekspedisi',$id,'id_ekspedisi');
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info','Data Ekspedisi Berhasil Terhapus');
            redirect('Admin/ekspedisi');
        } else {
            $this->session->set_flashdata('info','Data Ekspedisi Gagal Terhapus');
            redirect('Admin/ekspedisi');
        }
    }

    public function formedit_ekspedisi($id){
        $judul['atas']="Halaman Form Edit Ekspedisi";
        $judul['menuatas']="Form Edit Ekspedisi";
        $data['eks']=$this->Admin_model->formedit('tbl_ekspedisi','id_ekspedisi',$id);
        $data['combo']=$this->Admin_model->comboboxdinamis();
        $data['combotj']=$this->Admin_model->comboboxdinamistj();
        $data['error']="";
        $this->load->view('template/header',$judul);
        $this->load->view('formedit_ekspedisi',$data);
        $this->load->view('template/footer');
    }

    public function edit_ekspedisi(){
        $id=$this->input->post('id');
        $data= array(
            'no_rm'=>$this->input->post('no_rm'),
            'nama_pasien'=>$this->input->post('nama_pasien'),
            'jenis_layanan'=>$this->input->post('jenis_layanan'),
            'nama_peminjam'=>$this->input->post('nama_peminjam'),
            'kepentingan'=>$this->input->post('kepentingan'),
            'tujuan_ekspedisi'=>$this->input->post('tujuan_ekspedisi'),
            'nama_petugas'=>$this->input->post('nama_petugas'),
            'tgl_pinjam'=>$this->input->post('tgl_pinjam'),
            'tgl_kembali'=>$this->input->post('tgl_kembali')
        );
        $query = $this->Admin_model->editdata('tbl_ekspedisi','id_ekspedisi', $id, $data);

            if ($query) {
                $this->session->set_flashdata('info','Data Ekspedisi Berhasil Teredit');
                redirect('Admin/ekspedisi');
            } else {
                $this->session->set_flashdata('info','Data Ekspedisi Gagal Teredit');
                redirect('Admin/ekspedisi');
            }
    }

    public function laporan(){
                $judul['atas']="Halaman Laporan";
                $judul['menuatas']="Laporan";
                // $data['lap']=$this->Admin_model->tampildata('tbl_ekspedisi','id_ekspedisi');
                // $data['lap']=$this->Admin_model->joinlaporan();

                if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                        $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            
                        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                            $tgl_pinjam = $_GET['tanggal'];
            
                            $ket = 'Data Laporan Tanggal '.date('d-m-y', strtotime($tgl_pinjam));
                            $url_cetak = 'Admin/cetak?filter=1&tanggal='.$tgl_pinjam;
                            $eks = $this->Admin_model->view_by_date($tgl_pinjam); // Panggil fungsi view_by_date yang ada di TransaksiModel
                        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                            $bulan = $_GET['bulan'];
                            $tahun = $_GET['tahun'];
                            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
            
                            $ket = 'Data Laporan Bulan '.$nama_bulan[$bulan].' '.$tahun;
                            $url_cetak = 'Admin/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                            $eks = $this->Admin_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
                        }else{ // Jika filter nya 3 (per tahun)
                            $tahun = $_GET['tahun'];
            
                            $ket = 'Data Laporan Tahun '.$tahun;
                            $url_cetak = 'Admin/cetak?filter=3&tahun='.$tahun;
                            $eks = $this->Admin_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                        }
                    }else{ // Jika user tidak mengklik tombol tampilkan
                        $ket = '';
                        $url_cetak = 'Admin/cetak';
                        $eks = $this->Admin_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
                    }

                $data['ket'] = $ket;
                $data['eks']=$this->Admin_model->joineks();
                $data['url_cetak'] = base_url('index.php/'.$url_cetak);
                $data['eks'] = $eks;
                $data['option_tahun'] = $this->Admin_model->option_tahun();
                $this->load->view('template/header',$judul);
                $this->load->view('laporan',$data);
                $this->load->view('template/footer');
        }

        public function cetak(){
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                    $filter = $_GET['filter']; // Ambil data filder yang dipilih user
        
                    if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                        $tanggal = $_GET['tanggal'];
        
                        $ket = 'Data laporan Tanggal '.date('d-m-y', strtotime($tanggal));
                        $eks = $this->Admin_model->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di TransaksiModel
                    }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                        $bulan = $_GET['bulan'];
                        $tahun = $_GET['tahun'];
                        $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        
                        $ket = 'Data Laporan Bulan '.$nama_bulan[$bulan].' '.$tahun;
                        $eks = $this->Admin_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
                    }else{ // Jika filter nya 3 (per tahun)
                        $tahun = $_GET['tahun'];
        
                        $ket = 'Data Laporan Tahun '.$tahun;
                        $eks = $this->Admin_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                    }
                }else{ // Jika user tidak mengklik tombol tampilkan
                    $ket = '';
                    $eks = $this->Admin_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
                }
        
                $data['ket'] = $ket;
                $data['eks'] = $eks;
        
            ob_start();
            $this->load->view('cetak', $data);
            $html = ob_get_contents();
            ob_end_clean();

            require_once('./assets/html2pdf/html2pdf.class.php');
            $pdf = new HTML2PDF('P','A4','en');
            $pdf->WriteHTML($html);
            $pdf->Output('Laporan Ekapedisi.pdf', 'D');
        }

    // public function Admin_laporan(){
    //     $judul['atas']="Halaman Laporan";
    //     $judul['menuatas']="Laporan";
    //     $data['l']=$this->load->model('Laporan_model');
    //     $this->load->view('template/header',$judul);
    //     $this->load->view('Admin_laporan',$data);
    //     $this->load->view('template/footer');
    // }

        public function petugas(){
                $judul['atas']="Halaman Petugas";
                $judul['menuatas']="Petugas";
                $data['p']=$this->Admin_model->tampildata('tbl_petugas','id_petugas');
                $this->load->view('template/header',$judul);
                $this->load->view('petugas',$data);
                $this->load->view('template/footer');
        }

        public function tambah_petugas(){
                $judul['atas']="Halaman Tambah Petugas";
                $judul['menuatas']="Form Petugas";
                $this->load->view('template/header',$judul);
                $this->load->view('form_petugas');
                $this->load->view('template/footer');
        }
    
        public function simpan_petugas(){
        //     $this->form_validation->set_rules('nip','','required',array('required'=>'NIP Wajib Di Isi'));
            $this->form_validation->set_rules('nama_petugas','','required',array('required'=>'Nama Petugas Wajib Di Isi'));
            if ($this->form_validation->run()==FALSE) {
                $judul['atas']="Halaman Tambah Petugas";
                $judul['menuatas']="Form Petugas";
                $this->load->view('template/header',$judul);
                $this->load->view('form_petugas');
                $this->load->view('template/footer');
            } else {
                $data = array(
                    'nip'=>$this->input->post('nip'),
                    'nama_petugas'=>$this->input->post('nama_petugas')
                );
                $query = $this->Admin_model->simpandata('tbl_petugas',$data);
    
                    if ($query) {
                        $this->session->set_flashdata('info','Data Petugas Berhasil Tersimpan');
                        redirect('Admin/petugas');
                    } else {
                        $this->session->set_flashdata('info','Data Petugas Gagal Tersimpan');
                        redirect('Admin/petugas');
                    }
            }
        }
    
        public function hapuspetugas($id){
            $this->Admin_model->hapusdata('tbl_petugas',$id,'id_petugas');
            if ($this->db->affected_rows()) {
                $this->session->set_flashdata('info','Data Petugas Berhasil Terhapus');
                redirect('Admin/petugas');
            } else {
                $this->session->set_flashdata('info','Data Petugas Gagal Terhapus');
                redirect('Admin/petugas');
            }
        }
    
        public function formedit_petugas($id){
                $judul['atas']="Halaman Form Edit Petugas";
                $judul['menuatas']="Form Edit Petugas";
                $data['p']=$this->Admin_model->formedit('tbl_petugas','id_petugas',$id);
                $this->load->view('template/header',$judul);
                $this->load->view('formedit_petugas',$data);
                $this->load->view('template/footer');
        }
    
        public function edit_petugas(){
            $id=$this->input->post('id');
            $data= array(
                'nip'=>$this->input->post('nip'),
                'nama_petugas'=>$this->input->post('nama_petugas')
            );
            $query = $this->Admin_model->editdata('tbl_petugas','id_petugas', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data Petugas Berhasil Teredit');
                    redirect('Admin/petugas');
                } else {
                    $this->session->set_flashdata('info','Data Petugas Gagal Teredit');
                    redirect('Admin/petugas');
                }
        }
        
        public function tujuan(){
                $judul['atas']="Halaman Tujuan";
                $judul['menuatas']="Tujuan";
                $data['tj']=$this->Admin_model->tampildata('tbl_tujuan','id_tujuan');
                $this->load->view('template/header',$judul);
                $this->load->view('tujuan',$data);
                $this->load->view('template/footer');
        }
        
        public function tambah_tj(){
                $judul['atas']="Halaman Tambah Tujuan";
                $judul['menuatas']="Form Tujuan";
                $this->load->view('template/header',$judul);
                $this->load->view('form_tj');
                $this->load->view('template/footer');
        }
    
        public function simpan_tj(){
            $this->form_validation->set_rules('tj','','required',array('required'=>'Tujuan Wajib Di Isi'));
            if ($this->form_validation->run()==FALSE) {
                $judul['atas']="Halaman Tambah Tujuan";
                $judul['menuatas']="Form Tujuan";
                $this->load->view('template/header',$judul);
                $this->load->view('form_tj');
                $this->load->view('template/footer');
            } else {
                $data = array(
                    'tujuan_ekspedisi'=>$this->input->post('tj')
                );
                $query = $this->Admin_model->simpandata('tbl_tujuan',$data);
                    if ($query) {
                        $this->session->set_flashdata('info','Data Tujuan Berhasil Tersimpan');
                        redirect('Admin/tujuan');
                    } else {
                        $this->session->set_flashdata('info','Data Tujuan Gagal Tersimpan');
                        redirect('Admin/tujuan');
                    }
            }
            
        }
    
        public function hapustj($id){
            $this->Admin_model->hapusdata('tbl_tujuan',$id,'id_tujuan');
            if ($this->db->affected_rows()) {
                $this->session->set_flashdata('info','Data Tujuan Berhasil Terhapus');
                redirect('Admin/tujuan');
            } else {
                $this->session->set_flashdata('info','Data Tujuan Gagal Terhapus');
                redirect('Admin/tujuan');
            }
            
        }
    
        public function formedit_tj($id){
                $judul['atas']="Halaman Form Edit Tujuan";
                $judul['menuatas']="Form Edit Tujuan";
                $data['tj']=$this->Admin_model->formedit('tbl_tujuan','id_tujuan',$id);
                $this->load->view('template/header',$judul);
                $this->load->view('formedit_tj',$data);
                $this->load->view('template/footer');
        }
    
        public function edit_tj(){
            $id=$this->input->post('id');
            $data= array(
                'tujuan_ekspedisi'=>$this->input->post('tj')
            );
            $query = $this->Admin_model->editdata('tbl_tujuan','id_tujuan', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data Tujuan Berhasil Teredit');
                    redirect('Admin/tujuan');
                } else {
                    $this->session->set_flashdata('info','Data Tujuan Gagal Teredit');
                    redirect('Admin/tujuan');
                }
        }

        // public function admin(){
        //     $judul['atas']="Halaman Admin";
        //     $judul['menuatas']="Admin";
        //     $data['a']=$this->Admin_model->tampildata('tbl_admin','id_admin');
        //     $this->load->view('template/header',$judul);
        //     $this->load->view('admin',$data);
        //     $this->load->view('template/footer');
        // }

        public function admin(){
            if ($this->session->userdata('status')=='Admin') {
                $judul['atas']="Halaman Admin";
                $judul['menuatas']="Admin";
                $data['a']=$this->Admin_model->tampildata('tbl_admin','id_admin');
                $this->load->view('template/header',$judul);
                $this->load->view('admin',$data);
                $this->load->view('template/footer');
            } else if($this->session->userdata('status')=='User') {
                $id=$this->session->userdata('id_admin');
                $judul['atas']="Halaman Form Edit User";
                $judul['menuatas']="Form Edit User";
                $data['us']=$this->Admin_model->formedit('tbl_admin','id_admin',$id);
                $this->load->view('template/header',$judul);
                $this->load->view('formedit_user_session',$data);
                $this->load->view('template/footer');
            }else{
                echo "<h1><center>ANDA BELUM MELAKUKAN LOGIN</center></h1>";
            }
        }

        public function tambah_admin(){
            $judul['atas']="Halaman Tambah User";
            $judul['menuatas']="Form User";
            $this->load->view('template/header',$judul);
            $this->load->view('form_admin');
            $this->load->view('template/footer');
    }

    public function simpan_admin(){
        $this->form_validation->set_rules('username','','trim|required|min_length[5]|max_length[12]',array('required'=>'Username Wajib Di Isi','trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        $this->form_validation->set_rules('password', '', 'trim|required|min_length[5]|max_length[12]',array('required'=>'Password Wajib Di Isi','trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        $this->form_validation->set_rules('konpassword', '', 'required|matches[password]',array('required'=>'Konfirmasi Password Tidak Boleh Kosong','matches'=>'Konfirmasi Password Salah'));
        $this->form_validation->set_rules('status','','required',array('required'=>'Status Wajib Di Isi'));

        if ($this->form_validation->run()==FALSE) {
            $judul['atas']="Halaman Tambah User";
            $judul['menuatas']="Form User";
            $this->load->view('template/header',$judul);
            $this->load->view('form_admin');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'),
                'status'=>$this->input->post('status')
            );
            $query = $this->Admin_model->simpandata('tbl_admin',$data);

                if ($query) {
                    $this->session->set_flashdata('info','Data User Berhasil Tersimpan');
                    redirect('Admin/admin');
                } else {
                    $this->session->set_flashdata('info','Data User Gagal Tersimpan');
                    redirect('Admin/admin');
                }
        }
    }

    public function hapusadmin($id){
        $this->Admin_model->hapusdata('tbl_admin',$id,'id_admin');
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info','Data User Berhasil Terhapus');
            redirect('Admin/admin');
        } else {
            $this->session->set_flashdata('info','Data User Gagal Terhapus');
            redirect('Admin/admin');
        }
        
    }

    public function formedit_admin($id){
        $judul['atas']="Halaman Form Edit User";
        $judul['menuatas']="Form Edit User";
        $data['ad']=$this->Admin_model->formedit('tbl_admin','id_admin',$id);
        $this->load->view('template/header',$judul);
        $this->load->view('formedit_admin',$data);
        $this->load->view('template/footer');
    }

    public function edit_admin(){
        $id=$this->input->post('id');
        $this->form_validation->set_rules('username','','trim|required|min_length[5]|max_length[12]',array('required'=>'Username Wajib Di Isi','trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        $this->form_validation->set_rules('password', '', 'trim|min_length[5]|max_length[12]',array('trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        // $this->form_validation->set_rules('konpassword', '', 'required|matches[password]',array('required'=>'Konfirmasi Password Tidak Boleh Kosong','matches'=>'Konfirmasi Password Salah'));
        $this->form_validation->set_rules('status','','required',array('required'=>'Status Wajib Di Isi'));

        if ($this->form_validation->run()==FALSE) {
            $judul['atas']="Halaman Form Edit User";
            $judul['menuatas']="Form Edit User";
            $data['ad']=$this->Admin_model->formedit('tbl_admin','id_admin',$id);
            $this->load->view('template/header',$judul);
            $this->load->view('formedit_admin',$data);
            $this->load->view('template/footer');
        } else {
            if ($this->input->post('password')) {
                $data = array(
                    'username'=>$this->input->post('username'),
                    'password'=>$this->input->post('password'),
                    'status'=>$this->input->post('status')
                );
                $query = $this->Admin_model->editdata('tbl_admin','id_admin', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data User Berhasil Teredit');
                    redirect('Admin/admin');
                } else {
                    $this->session->set_flashdata('info','Data User Gagal Teredit');
                    redirect('Admin/admin');
                }
            } else {
                $data = array(
                    'username'=>$this->input->post('username'),
                    'status'=>$this->input->post('status')
                );
                $query = $this->Admin_model->editdata('tbl_admin','id_admin', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data User Berhasil Teredit');
                    redirect('Admin/admin');
                } else {
                    $this->session->set_flashdata('info','Data User Gagal Teredit');
                    redirect('Admin/admin');
                }
            }
        }
        // $data= array(
        //     'tahun_pelajaran'=>$this->input->post('th')
        // );
    }

    public function edit_user_session(){
        $id=$this->input->post('id');
        $this->form_validation->set_rules('username','','trim|required|min_length[5]|max_length[12]',array('required'=>'Username Wajib Di Isi','trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        $this->form_validation->set_rules('password', '', 'trim|min_length[5]|max_length[12]',array('trim'=>'','min_length'=>'Minimal 5 Karakter','max_length'=>'Maksimal 12 Karakter'));
        // $this->form_validation->set_rules('konpassword', '', 'required|matches[password]',array('required'=>'Konfirmasi Password Tidak Boleh Kosong','matches'=>'Konfirmasi Password Salah'));
        // $this->form_validation->set_rules('status','','required',array('required'=>'Status Wajib Di Isi'));

        if ($this->form_validation->run()==FALSE) {
            $judul['atas']="Halaman Form Edit User";
            $judul['menuatas']="Form Edit User";
            $data['ad']=$this->Admin_model->formedit('tbl_admin','id_admin',$id);
            $this->load->view('template/header',$judul);
            $this->load->view('formedit_admin',$data);
            $this->load->view('template/footer');
        } else {
            if ($this->input->post('password')) {
                $data = array(
                    'username'=>$this->input->post('username'),
                    'password'=>$this->input->post('password')
                );
                $query = $this->Admin_model->editdata('tbl_admin','id_admin', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data User Berhasil Teredit');
                    redirect('Admin/admin');
                } else {
                    $this->session->set_flashdata('info','Data User Gagal Teredit');
                    redirect('Admin/admin');
                }
            } else {
                $data = array(
                    'username'=>$this->input->post('username')
                );
                $query = $this->Admin_model->editdata('tbl_admin','id_admin', $id, $data);
    
                if ($query) {
                    $this->session->set_flashdata('info','Data User Berhasil Teredit');
                    redirect('Admin/admin');
                } else {
                    $this->session->set_flashdata('info','Data User Gagal Teredit');
                    redirect('Admin/admin');
                }
            }
        }
        // $data= array(
        //     'tahun_pelajaran'=>$this->input->post('th')
        // );
    }
}
