<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Archivo extends CI_Controller {

    function cargar_archivo() {

        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = "uploads/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "avi";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error en la subida del archivo
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }
}
