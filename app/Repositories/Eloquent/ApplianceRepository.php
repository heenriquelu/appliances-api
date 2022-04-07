<?php

namespace App\Repositories\Eloquent;

use App\Models\Appliance;
use App\Repositories\Contracts\ApplianceRepositoryInterface;

class ApplianceRepository extends AbstractRepository implements ApplianceRepositoryInterface
{

    protected $model = Appliance::class;

}
