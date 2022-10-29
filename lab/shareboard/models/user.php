<?php
class UserModel extends Model{
  public function register(){
    // Sanitize POST (the post array)
    $post = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); // FILTER_SANITIZE_STRING is deprecated
 
    // Encrypt the password before entering into Database. 
    // For this tutorial, use the md5 method, but probably not the best way to do it ...
    // ... Should use sha-1 or some other advanced encryption method or process.
    // $password = md5($post['password']); // Doesn't work ...

    // So, did it this way : https://www.php.net/manual/en/function.password-hash.php
 
    // isset was necessary to prevent 'Trying to access array offset on value of type null' notice
    if(isset($post['password'])) {
      $password = password_hash($post['password'], PASSWORD_BCRYPT);
    }

    // isset was necessary to prevent 'Trying to access array offset on value of type null' notice
    if(isset($post['submit'])) {
      // die('SUBMITTED'); test if working - click submit, see 'submitted'
       // Insert into MySQL
      $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);
      $this->execute();
      // Verify
      if($this->lastInsertId()){
        // Redirect
        header('Location: '.ROOT_URL.'users/login');
      }
    }
    return;
  }
}