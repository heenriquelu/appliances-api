<?php

namespace App\Services;

use App\Http\Resources\Appliance as ApplianceResource;
use App\Repositories\Contracts\ApplianceRepositoryInterface;
use Validator;


class ApplianceService extends BaseService
{
    protected $applianceRepository;

    public function __construct(ApplianceRepositoryInterface $applianceRepository)
    {
        $this->applianceRepository = $applianceRepository;
    }

    public function getAllAppliances()
    {
        $appliances = $this->applianceRepository->getAll();

        return $this->sendResponse(ApplianceResource::collection($appliances), 'Appliances retrieved successfully.');
    }

    public function create(array $data)
    {
        $input = $data;

        $validator = Validator::make($input, [
            'name' => 'required',
            'description' => 'required',
            'voltage' => 'required',
            'brand_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $appliance = $this->applianceRepository->create($data);

        return $this->sendResponse(new ApplianceResource($appliance), 'Appliance created successfully.');
    }

    public function getById($id)
    {
        $appliance = $this->applianceRepository->getById($id);

        if (is_null($appliance)) {
            return $this->sendError('Appliance not found.');
        }

        return $this->sendResponse(new ApplianceResource($appliance), 'Appliance retrieved successfully');
    }


    public function update(array $data, $id)
    {
        $appliance = $this->applianceRepository->getById($id);

        if (!empty($appliance)) {
            $appliance->update($data);
            return $this->sendResponse(new ApplianceResource($appliance), 'Appliance updated successfully.');
        }

        return $this->sendError('Not Found.', ['error' => 'Not Found']);

    }

    public function deleteById($id)
    {
        $appliance = $this->applianceRepository->getById($id);

        if (!empty($appliance)) {
            $appliance->destroy($id);
            return $this->sendResponse([], 'Appliance deleted successfully');
        }

        return $this->sendError('Not Found.', ['error' => 'Not Found']);

    }
}
