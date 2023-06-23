<?php

class Blog_model extends CI_Model
{
    public function getBlogs($limit, $offset)
    {
        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        $this->db->limit($limit, $offset);
        $this->db->order_by('date', 'desc');
        return $this->db->get("myblog");
    }

    public function getTotalBlogs()
    {
        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        return $this->db->count_all_results("myblog");
    }
    public function getSingleBlog($field, $value)
    {
        $this->db->where($field, $value);
        return  $this->db->get('myblog');
    }
    public function insertBlog($data)
    {
        $this->db->insert('myblog', $data);
        return $this->db->insert_id();
    }
    public function updateBlog($id, $post)
    {
        $this->db->where('id', $id);
        $this->db->update('myblog', $post);
        return $this->db->affected_rows();
    }
    public function deleteBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('myblog');
        return $this->db->affected_rows();
    }
}
