<?php
namespace App\Repositories;

class ResourceRepository {
    protected $model;
    
    public function index($nbr) {
        return $this->model->orderBy('id','titre')->paginate($nbr);
    }
    
    public function store(array $inputs) {
        return $this->model->create($inputs);
    }
    
    public function update(array $inputs, $model) {
        $model->update($inputs);
    }
    
    public function destroy($model) {
        $model->delete();
    }

    public function all(){
        return $this->model->all();
    }

    public function find_one_id($id){
        return $this->model->findOrFail($id);
    }
}