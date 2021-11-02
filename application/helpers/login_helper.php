 <?php

function cek_Login()
{
    $CI = &get_instance();

    if ($CI->session->userdata('status') != 'Login' || $CI->session->userdata('id_user') == "" || $CI->session->userdata('token') == "") {
        redirect(base_url('MasukUser'));
    } else if ($CI->session->userdata('role_id') != 2) {
        redirect(base_url('MasukUser'));
    }
}

function login_admin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('status') != 'Login' || $CI->session->userdata('id_user') == "" || $CI->session->userdata('token') == "") {
        redirect(base_url('MasukUser'));
    } else if ($CI->session->userdata('role_id') != 1) {
        redirect(base_url('MasukUser'));
    }
}
