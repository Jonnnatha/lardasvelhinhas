<?php
class produtos  extends CI_MOdel{

  public function salvaidoso($produto){
    $this->db->insert("cad_idoso",$produto);
  }

  public function retidoso(){
  return $this->db->get("cad_idoso")->result();
}


}
