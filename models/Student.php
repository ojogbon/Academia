<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Student extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("student_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveStudent($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllStudent()
    {
        $sql = "select * from  student_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllStudentBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getStudentById($id)
    {
        $sql = "select * from  student_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateStudent ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
