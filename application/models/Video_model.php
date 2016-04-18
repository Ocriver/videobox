<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 3/23/16
 * Time: 4:28 PM
 */

class Video_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_videos($videoid = FALSE)
    {
        if ($videoid === FALSE)
        {
            $query = $this->db->get('videos');
            return $query->result_array();

            //Devuelve todos los videos
        }

        $query = $this->db->get_where('videos', array('videoid' => $videoid));
        return $query->row_array();
        //Devuelve el video por su id.
    }

    public function set_videos()
    {
        $this->load->helper('url');

        $videoid = url_title($this->input->post('name'), 'dash', TRUE);
        $mpeg_dash = ($this->input->post('mpeg-dash'))?1:0;
        
        $data = array(
            'title' => $this->input->post('title'),
            'videoid' => $videoid,
            'text' => $this->input->post('text'),
            'name' => $this->input->post('name'),
            'mpeg-dash' => $mpeg_dash
        );

        return $this->db->insert('videos', $data);
    }
}