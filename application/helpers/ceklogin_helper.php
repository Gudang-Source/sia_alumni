<?php
defined('BASEPATH') or exit('No direct script access allowed');

function getAuthAlumni()
{
    $CI = &get_instance();
    if ($CI->session->userdata('is_login') !== 'punten') {
        $CI->session->set_flashdata('msg_failed', 'Maaf, Harus login terlebih dahulu!');
        redirect('/');
        return false;
    }elseif($CI->session->userdata('nama_role') !== 'Alumni'){
        $CI->session->set_flashdata('msg_failed', 'Maaf, Anda tidak memiliki akses ke halaman!');
        redirect('/');
        return false;
    }
}

function getAuthAdmin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('is_login') !== 'punten') {
        $CI->session->set_flashdata('msg_failed', 'Maaf, Harus login terlebih dahulu!');
        redirect('admin');
        return false;
    }elseif ($CI->session->userdata('nama_role') !== 'Admin') {
        $CI->session->set_flashdata('msg_failed', 'Maaf, Anda tidak memiliki akses ke halaman!');
        redirect('admin');
        return false;
    }
}