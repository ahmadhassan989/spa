<?php

namespace App\Services;

use App\Repositories\Contracts\BaseRepositoryInterface;

class AppointmentService {
    protected $appointmentRepository;

    public function __construct(BaseRepositoryInterface $appointmentRepository) {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function getUpcomingAppointments() {
        return $this->appointmentRepository->findUpcomingAppointments();
    }
}
