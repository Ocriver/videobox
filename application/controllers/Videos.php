<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
        $this->load->helper('url_helper');
        $this->load->library('parser');

    }

    public function index()
    {
        $data['videos'] = $this->Video_model->get_videos();
        $data['title'] = 'Videos recientes';

        $this->parser->parse('templates/header', $data);
        $this->parser->parse('videos/video_archives_template', $data);
        //$this->load->view('videos/index', $data);
        $this->load->view('templates/footer');
    }

          function new_video($error = '')
   {
      $data['error'] = $error;
      $this->load->view('header');
      $this->load->view('video/new_video', $data);
      $this->load->view('footer');
   }

    public function view($videoid = NULL)
    {
        //$data['videos_item'] = $this->Video_model->get_videos($videoid);
        $data = $this->Video_model->get_videos($videoid);
        if (empty($data))
        {
            show_404();
        }


        //Load View
        $this->parser->parse('templates/header', $data);

        if ($data['mpeg-dash'])
        {
            $this->parser->parse('videos/view-dash', $data);
        }
        else
        {
            $this->parser->parse('videos/view', $data);
        }

        $this->load->view('templates/footer');
    }


    public function upload()
    {
        if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Archivo extends CI_Controller {

    function cargar_video() {

        $mi_video = 'mi_video';
        $config['upload_path'] = "./videos/";
        $config['allowed_types'] = "avi";
        $config['max_size'] = "50000";

        $this->load->library('upload', $config);
        
        if ($this->form_validation->run() == FALSE)
        {
   //Acción a tomar si existe un error el en la validación
        }
        else
        {
   //Acción a tomas si no existe ningun error
        }
        
        if (!$this->upload->do_upload($mi_video)) {
            //*** ocurrio un error en la subida del video
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }

        req_logged_in();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Upload a video item';

        $this->form_validation->set_rules('title', 'Titulo', 'required|is_unique');
        $this->form_validation->set_rules('text', 'Descripcion', 'required|is_unique');
        $this->form_validation->set_rules('name', 'Nombre Archivo', 'required|is_unique');

        if ($this->form_validation->run() === FALSE)
        {
            $this->parser->parse('templates/header', $data);
            $this->load->view('videos/upload');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->Video_model->set_videos();
            //TODO (Diego): Comprobar que no exista ya el video. ( campos )
            $this->load->view('videos/sucess');
        }
    }
}
}
