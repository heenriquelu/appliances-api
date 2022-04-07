<?php

namespace App\Services;

use App\Http\Resources\Brand as BrandResource;
use App\Repositories\Contracts\BrandRepositoryInterface;
use Validator;


class BrandService extends BaseService
{
    protected $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function getAllBrands()
    {
        $brands = $this->brandRepository->getAll();

        return $this->sendResponse(BrandResource::collection($brands), 'Brands retrieved successfully.');
    }

    public function create(array $data)
    {
        $input = $data;

        $validator = Validator::make($input, [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $brand = $this->brandRepository->create($data);

        return $this->sendResponse(new BrandResource($brand), 'Brand created successfully.');
    }

    public function getById($id)
    {
        $brand = $this->brandRepository->getById($id);

        if (is_null($brand)) {
            return $this->sendError('Brand not found.');
        }

        return $this->sendResponse(new BrandResource($brand), 'Brand retrieved successfully');
    }


    public function update(array $data, $id)
    {
        $brand = $this->brandRepository->getById($id);

        if (!empty($brand)) {
            $brand->update($data);
            return $this->sendResponse(new BrandResource($brand), 'Brand updated successfully.');
        }

        return $this->sendError('Not Found.', ['error' => 'Not Found']);

    }

    public function deleteById($id)
    {
        $brand = $this->brandRepository->getById($id);

        if (!empty($brand)) {
            $brand->destroy($id);
            return $this->sendResponse([], 'Brand deleted successfully');
        }

        return $this->sendError('Not Found.', ['error' => 'Not Found']);

    }
}
