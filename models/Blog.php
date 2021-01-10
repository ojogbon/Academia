<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Blog extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("blog_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveblog($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllBlog()
    {
        $sql = "select * from blog_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllBlogBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getBlogById($id)
    {
        $sql = "select * from blog_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateBlog ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
