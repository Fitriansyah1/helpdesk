<?php
defined('BASEPATH') or exit('No direct script access allowed');

function cek_login()
{
    $CI = &get_instance();
    $email = $CI->session->email;

    if ($email == NULL) {
        $CI->session->set_flashdata('message', '<div class="alert alert-danger">Anda Harus Login Dulu</div>');

        redirect('auth/login');
    }
}

// File: application/helpers/auth_helper.php

function is_it()
{
    $CI = &get_instance();

    $tipeuser = $CI->session->level_user;

    return ($tipeuser == '1');
}

function is_admin()
{
    $CI = &get_instance();

    $tipeuser = $CI->session->level_user;

    return ($tipeuser == '2');
}

function is_teknisi()
{
    $CI = &get_instance();

    $tipeuser = $CI->session->level_user;

    return ($tipeuser == '3');
}
