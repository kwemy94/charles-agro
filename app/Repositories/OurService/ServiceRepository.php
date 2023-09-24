<?php

namespace App\Repositories\OurService;

use App\Models\Service;
use App\Repositories\ResourceRepository;

class ServiceRepository extends ResourceRepository {

    public function __construct(Service $service) {
        $this->model = $service;
    }

    public function getAll() 
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

    

}
