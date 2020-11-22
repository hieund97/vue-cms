<?php
namespace App\Repositories\Menu;

use App\Repositories\EloquentRepository;

class MenuRepository extends EloquentRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Menu::class;
    }
}