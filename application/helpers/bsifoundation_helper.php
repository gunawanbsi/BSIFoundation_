<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Akses Ditolak. Silahkan Login Terlebih Dahulu.
        </div>');
        redirect('autentifikasi');
    } 
    else {
        $role_id = $ci->session->userdata('role_id');
    }
}