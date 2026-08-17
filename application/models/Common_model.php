<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model
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

    function getTestimonials()
    {
        $this->db->select('tst.*,pt.property_type_name');
        $this->db->from('testimonials tst');
        $this->db->join('property_types pt','pt.property_type_id=tst.property_type_id');
        $this->db->where('tst.display_status',1);
        $this->db->order_by('tst.display_order','ASC');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }

    function getInteriorImages()
    {
        $this->db->where('status', 1);
        $this->db->order_by('display_order', 'DESC');
        $this->db->limit(5);
        return $this->db->get('interior_images')->result_array();
    }

    function getBlogs()
    {
        $this->db->where('status', 1);
        $this->db->order_by('display_order', 'DESC');
        $this->db->order_by('created_date', 'DESC');
        return $this->db->get('blogs')->result_array();
    }

    public function getAmenitiesSlider()
    {
        return $this->db
            ->where('status', 1)
            ->order_by('display_order', 'ASC')
            ->get('home_amenties_slider')
            ->row_array();
    }

    public function getAmenitiesGallery()
    {
        return $this->db
            ->where('status', 1)
            ->order_by('display_order', 'ASC')
            ->get('home_amenties_gallery')
            ->result_array();
    }


}
