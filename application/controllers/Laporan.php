<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function LaporanDataRelawan(){
        $data['judul'] = 'Laporan Data Relawan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['relawan'] = $this->ModelRelawan->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_relawan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function cetak_laporan_relawan()
    {
        $data['judul'] = 'Laporan Data Relawan';
        $data['relawan'] = $this->ModelRelawan->cekData()->result();

        $this->load->view('admin/laporan/print_relawan', $data);
    }

    public function pdf_relawan()
    {
        $data['judul'] = 'Laporan Data Relawan';
        $data['relawan'] = $this->ModelRelawan->cekData()->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_relawan', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_relawan.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_relawan()
    {
        $data =  array( 'title' => 'Laporan Relawan', 'relawan' => $this->ModelRelawan->cekData()->result());
        $this->load->view('admin/laporan/excel_relawan', $data);
    }

    public function LaporanDataUser(){
        $data['judul'] = 'Laporan Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_user', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function print_user()
    {
        $data['judul'] = 'Laporan Data User';
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result();

        $this->load->view('admin/laporan/print_user', $data);
    }

    public function pdf_user()
    {
        $data['judul'] = 'Laporan Data User';
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_user', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_user.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_user()
    {
        $data =  array( 'title' => 'Laporan User', 'user' => $this->ModelUser->cekData(['role_id' => (2)])->result());
        $this->load->view('admin/laporan/excel_user', $data);
    }

    public function LaporanDataHewan(){
        $data['judul'] = 'Laporan Data Hewan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewan()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_hewan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function print_hewan()
    {
        $data['judul'] = 'Laporan Data Hewan';
        $data['hewan'] = $this->ModelHewan->getHewan()->result();

        $this->load->view('admin/laporan/print_hewan', $data);
    }

    public function pdf_hewan()
    {
        $data['judul'] = 'Laporan Data Hewan';
        $data['hewan'] = $this->ModelHewan->getHewan()->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_hewan', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_hewan.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_hewan()
    {
        $data =  array( 'title' => 'Laporan Hewan', 'hewan' => $this->ModelHewan->getHewan()->result());
        $this->load->view('admin/laporan/excel_hewan', $data);
    }

    public function LaporanDataDonasi(){
        $data['judul'] = 'Laporan Data Donasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->ModelDonasi->cekDataDetail()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_donasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function print_donasi()
    {
        $data['judul'] = 'Laporan Data Donasi';
        $data['detail'] = $this->ModelDonasi->cekDataDetail()->result();

        $this->load->view('admin/laporan/print_donasi', $data);
    }

    public function pdf_donasi()
    {
        $data['judul'] = 'Laporan Data Donasi';
        $data['detail'] = $this->ModelDonasi->cekDataDetail()->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_donasi', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_donasi.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_donasi()
    {
        $data =  array( 'title' => 'Laporan Donasi', 'detail' => $this->ModelDonasi->cekDataDetail()->result());
        $this->load->view('admin/laporan/excel_donasi', $data);
    }

    public function LaporanDataAdopsi(){
        $data['judul'] = 'Laporan Data Adopsi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['adopsi'] = $this->ModelAdopsi->cekData()->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_adopsi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function print_adopsi()
    {
        $data['judul'] = 'Laporan Data Adopsi';
        $data['adopsi'] = $this->ModelAdopsi->cekData()->result();

        $this->load->view('admin/laporan/print_adopsi', $data);
    }

    public function pdf_adopsi()
    {
        $data['judul'] = 'Laporan Data Donasi';
        $data['adopsi'] = $this->ModelAdopsi->cekData()->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_adopsi', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_adopsi.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_adopsi()
    {
        $data =  array( 'title' => 'Laporan Adopsi', 'adopsi' => $this->ModelAdopsi->cekData()->result());
        $this->load->view('admin/laporan/excel_adopsi', $data);
    }

    public function LaporanDataPemesanan(){
        $data['judul'] = 'Laporan Data Pemesanan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pesanan'] = $this->db->query("select * from pesanan p,detail_pesanan d,barang b,user u where d.id_barang=b.id and p.nama=u.nama and p.id=d.id_invoice")->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/laporan/laporan_data_pemesanan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function print_pemesanan()
    {
        $data['judul'] = 'Laporan Data Pemesanan';
        $data['pesanan'] = $this->db->query("select * from pesanan p,detail_pesanan d,barang b,user u where d.id_barang=b.id and p.nama=u.nama and p.id=d.id_invoice")->result();

        $this->load->view('admin/laporan/print_pemesanan', $data);
    }

    public function pdf_pemesanan()
    {
        $data['judul'] = 'Laporan Data Pemesanan';
        $data['pesanan'] = $this->db->query("select * from pesanan p,detail_pesanan d,barang b,user u where d.id_barang=b.id and p.nama=u.nama and p.id=d.id_invoice")->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/bsifoundation/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan/pdf_pemesanan', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_pemesanan.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function excel_pemesanan()
    {
        $data =  array( 'title' => 'Laporan Pemesanan', 'pesanan' => 
        $this->db->query("select * from pesanan p,detail_pesanan d,barang b,user u where d.id_barang=b.id and p.nama=u.nama and p.id=d.id_invoice")->result());
        $this->load->view('admin/laporan/excel_pemesanan', $data);
    }

}