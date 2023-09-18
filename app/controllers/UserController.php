<?php
use hicome\app\models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return $this->render('user/index', [
            'user' => $user
        ]);
    }
    public function add()
    {
        if(isset($_POST['username'])){
            $data = new User();
            $data->username = $_POST['username'];
            $data->password = $_POST['password'];
            $data->save();
            $this->redirect('user/');
        }
        return $this->render('user/add');
    }
    public function edit($id)
    {
        $user = User::find($id);

        if(isset($_POST['username'])){
            $data = User::find($id);
            $data->username = $_POST['username'];
            $data->password = $_POST['password'];
            $data->save();

            $this->redirect('user/');
        }
        return $this->render('user/edit', [
            'user' => $user
        ]);
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        $this->redirect('user/');
    }
}

