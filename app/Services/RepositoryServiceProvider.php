<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Eloquent\AppointmentRepository;

class RepositoryServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(BaseRepositoryInterface::class, AppointmentRepository::class);
        
    }
}
