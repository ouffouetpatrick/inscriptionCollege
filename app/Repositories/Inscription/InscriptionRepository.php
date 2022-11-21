<?php
namespace App\Repositories\Inscription;
use App\Models\Inscription;
use App\Repositories\ResourceRepository;
/**
 * 
 */
class InscriptionRepository extends ResourceRepository
{
    
    public function __construct(Inscription $inscriptions)
    {
        $this->model=$inscriptions; 
    }
}
