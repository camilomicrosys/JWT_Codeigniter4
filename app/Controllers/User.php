<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
 
class User extends BaseController
{
    use ResponseTrait;
     
    public function index()
    {
        $users = new UserModel;
        return $this->respond(['users' => $users->findAll()], 200);
    }
    public function prueba(){
        $data=[
            'messaje'=>[['nombre'=>'camilo','apellido'=>'agudelo'],['nombre'=>'cristina','apellido'=>'castro']],
            'status'=>200
        ];
      //el respond automaticamente le aplica a $data el json encode
        return $this->respond(['data' =>$data], 200);
    }
}
?>
