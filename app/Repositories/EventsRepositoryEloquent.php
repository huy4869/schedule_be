<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EventsRepository;
use App\Entities\Events;
use App\Validators\EventsValidator;

/**
 * Class EventsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EventsRepositoryEloquent extends BaseRepository implements EventsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Events::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getAllEvents()
    {
        // TODO: Implement getAllEvents() method.
        return $this->model->all();
    }
}
