<?php

namespace App\Repositories\Contracts;

interface BrandRepositoryInterface
{
    public function getAll();

    public function create(array $data);

    public function getById(array $data);

    public function update(array $data, $id);

    public function destroy($id);
}
