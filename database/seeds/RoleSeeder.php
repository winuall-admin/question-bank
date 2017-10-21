<?php


use App\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * @var Role|Builder
     */
    private $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function run()
    {
        $this->model->create(['role' => Role::OPERATOR]);
        $this->model->create(['role' => Role::QUESTION_REVIEWER]);
        $this->model->create(['role' => Role::ADMIN]);
    }
}