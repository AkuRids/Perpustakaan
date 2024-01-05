<?php

class m_buku extends CI_model{

  public function id_buku(){
    $this->db->select('RIGHT (buku.id_buku, 3) as code', FALSE);
    $this->db->order_by('id_buku', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('buku');

    if($query->num_rows() > 0){
      $data = $query->row();
      $code = intval($data->code) + 1;
    }
    else{
      $code = 1;
    }

    $codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
    $coderesult = "BK" . $codemax;
    return $coderesult;
  }

  public function get_data_buku(){

    $this->db->from('buku');
    $this->db->order_by('id_buku', 'DESC');
    $result = $this->db->get();
    
    return $result;
  }

  public function edit($id){
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->where('buku.id_buku', $id);
    $this->db->order_by('id_buku', 'DESC');
    $result = $this->db->get()->row_array();
    return $result;
  }

  public function update($id_buku, $data){
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku', $data);
  }

  public function delete($id){
    $this->db->where('id_buku', $id);
    $this->db->delete('buku');
  }




}
