<?php



class TestingModel extends CI_Model {


   public function __construct() {
       parent::__construct();
   }

   public function testing() {
        return $this->db->query("SELECT VERSION()")->row("version");
   }
}
?>