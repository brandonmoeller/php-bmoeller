<?php
class Bootstrap
{
  private $controller;
  private $action;
  private $request;

  public function __construct($request)
  {
    $this->request = $request;
    if ($this->request['controller'] == "") {
      $this->controller = 'home';
    } else {
      $this->controller = $this->request['controller'];
    }
    if ($this->request['action'] == "") {
      $this->action = 'index';
    } else {
      $this->action = $this->request['action'];
    }
    // echo $this->controller; // tell us what the controller is (i.e. /users/register/ - the controller is 'users')
    // echo $this->action; // tell us what the action is (i.e. /users/ - the action is, well there is no action, so displays 'index' ... but for /users/register/ - the action is 'register')
  }

  public function createController()
  {
    // Check Class
    if (class_exists($this->controller)) {
      $parents = class_parents($this->controller);
      // Check Extend
      if (in_array("Controller", $parents)) {
        if (method_exists($this->controller, $this->action)) {
          return new $this->controller($this->action, $this->request);
        } else {
          // Method Deos Not Exist
          echo '<h1>Method does not exist</h1>';
          return;
        }
      } else {
        // Base Controller Does Not Exist
        echo '<h1>Base controller not found</h1>';
        return;
      }
    }
  }
}
