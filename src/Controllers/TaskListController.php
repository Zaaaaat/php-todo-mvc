<?php
class TaskListController extends AbstractController {
  
  public function render () : void {
      var_dump($_GET);
   echo get_template( __PROJECT_ROOT__ . "/Views/list.php", [
     'tasks' => $this->taskService->list( array(
         "search" => $_GET["search"],
         "perPage" => 10
     ) )['tasks']
   ] );
  }
  
}