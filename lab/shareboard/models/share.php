<?php
class ShareModel extends Model{
  public function Index(){
    $this->query('SELECT * FROM shares ORDER BY create_date DESC');
    $rows = $this->resultSet();
    // print_r($rows);
    return $rows;
  }

  public function add(){
    // return;
    // Sanitize POST (the post array)
    $post = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); // FILTER_SANITIZE_STRING is deprecated
 
    // isset was necessary to prevent 'Trying to access array offset on value of type null' notice
    if(isset($post['submit'])) {
       // Insert into MySQL
      $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->bind(':link', $post['link']);
      $this->bind(':user_id', 1);
      $this->execute();
      // Verify
      if($this->lastInsertId()){
        // Redirect
        header('Location: '.ROOT_URL.'shares');
      }
    }
    return;
  }
}