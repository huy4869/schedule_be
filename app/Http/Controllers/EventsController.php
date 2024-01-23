<?php

namespace App\Http\Controllers;

use App\Repositories\EventsRepository;
use Illuminate\Http\Request;
class EventsController extends Controller
{
    // constructor to bind repository to controller laravel 10
    protected $repository;

    public function __construct(EventsRepository $repository){
        $this->repository = $repository;
    }

    // get all events
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Events retrieved successfully',
            'data' => $this->repository->getAllEvents()
        ]);
    }
}
