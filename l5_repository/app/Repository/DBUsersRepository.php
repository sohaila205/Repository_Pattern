<?php 
namespace App\Repository;

use App\Models\User;
use App\RepositoryInterface\UserRepositoryInterface;

class DBUsersRepository implements UserRepositoryInterface{

     public function all()
     {
         return User::all();
     }

     public function create($request)
     {
         return User::create($request);
     }

     public function getUser($id) 
     {
         return User::findOrFail($id);
     }
     public function edit($id,$request){
        return User::findOrFail($id)->update($request);
     }

     public function delete($id){
        return User::destroy($id);
     }
}