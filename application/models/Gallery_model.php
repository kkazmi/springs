<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
    public function getPreloaderGallery()
    {
        $this->db->select('
            gs.section_key,
            gi.image_xs,
            gi.image_md,
            gi.image_xxl,
            gi.image_xxxl,
            gi.alt_text
        ');

        $this->db->from('preloader_images gi');
        $this->db->join('preloader_sections gs','gs.id=gi.section_id');
        $this->db->where('gs.status',1);
        $this->db->where('gi.status',1);
        $this->db->order_by('gs.display_order','ASC');
        $this->db->order_by('gi.display_order','ASC');
        $result = $this->db->get()->result_array();

        $gallery=[];

        foreach($result as $row)
        {
            $gallery[$row['section_key']][]=$row;
        }

        return $gallery;
    }

    function getHeroSliderGallery()
    {
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get('hero_slider_section');
        return $query->result_array();
    }

     public function getHeroCaption()
    {
        return $this->db
            ->where('status', 1)
            ->order_by('sort_order', 'ASC')
            ->limit(1)
            ->get('hero_caption_section')
            ->row_array();
    }
}
