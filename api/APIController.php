<?php
require_once 'models/ComentarioModel.php';

include_once('models/UserModel.php');
include_once('models/NotebookModel.php');
include_once('helpers/auth.helper.php');
require_once 'api/APIView.php';

class ApiController {

    private $model;
    private $view;
    private $modelUser;
    private $modelNotebook;

    public function __construct() {
        $this->model =  new ComentarioModel();
        $this->view = new APIView();
        $this->modelUser =  new UserModel();
        $this->modelNotebook =  new NotebookModel();
    }

    public function getComments($params = [])
    { 

        if (!empty($params)) {
            $id = $params[':ID'];
            $listComment = $this->model->getComments($id);
           
            if ($listComment)
                $this->view->response($listComment, 200);
            else
                $this->view->response("Sin comentarios", 200);     
        }
        else
           $this->view->response(null, 404);

    } 

    public function deleteComment($params = [])
    {
        $authHelper = new AuthHelper();
        $userLogged = $authHelper->getLoggedEmail();
        if  (   (!(is_null($userLogged))) && ($authHelper->isAdmin())    )
        {
            if (!empty($params)) {
                $id = $params[':ID'];
                $result = $this->model->getComment($id);
                if (!empty($result)) {
                    $result = $this->model->deleteComment($id);
                    $this->view->response($result, 200);
                }
                else {
                    $this->view->response(null, 404);
                }
            }
            else {
                $this->view->response(null, 400);
            }
        }else {
            $this->view->response(false, 403);
        }
    }

    public function newComment()
    {
        $params = json_decode(file_get_contents("php://input"));
        $notebook = $this->modelNotebook->getNotebookById($params->notebook);
        
        $authHelper = new AuthHelper();
        $userLogged = $authHelper->getLoggedEmail();
        if  (   (!(is_null($notebook))) && (!(is_null($userLogged)))    )
        {
            $user = $this->modelUser->getUserByEmail($userLogged);
            $result = $this->model->newComment($notebook->id_notebook, $user->id_usuario, $params->calificacion, $params->texto);
            if ($result)
                $this->view->response($result, 200);
            else
                $this->view->response(null, 500);
        }
        else
            $this->view->response(null, 403);
    }
}
?>