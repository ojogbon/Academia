<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Tutor extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("tutor_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveTutor($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllTutor()
    {
        $sql = "select * from  tutor_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllTutorBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getTutorById($id)
    {
        $sql = "select * from  tutor_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateTutor ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
