<?php
namespace App\RepositoryInterface;

//use App\RepositoryInterface\UserRepositoryInterface;

interface UserRepositoryInterface {

   public function all();

   public function create($request);
   public function delete($id);
   public function getUser($id);
   public function edit($id,$request);

}
