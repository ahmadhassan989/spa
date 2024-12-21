<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface {
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function all() {
        return $this->model->all();
    }

    public function find($id) {
        return $this->model->find($id);
    }

    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes) {
        $model = $this->find($id);
        return $model ? $model->update($attributes) : null;
    }

    public function delete($id) {
        $model = $this->find($id);
        return $model ? $model->delete() : false;
    }
}
