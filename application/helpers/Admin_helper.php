<?php

function cekLogin()
{
  $ci = get_instance();
  if (!$ci->session->userdata('username')) {
    redirect('auth/blocked');
  } // else {
  //   $role_id = $ci->session->userdata('role_id');
  //   $menu = $ci->uri->segment(1);


  // }
}
