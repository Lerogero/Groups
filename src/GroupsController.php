<?php

namespace Lerogero\Groups;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\GroupRepositoryInterface;

/**
 * Class GroupsController
 * @package App\Http\Controllers
 */
class GroupsController extends Controller
{
    /**
     * @var
     */
    private $group;

    /**
     * GroupsController constructor.
     * @param $group
     */
    public function __construct(GroupRepositoryInterface $group)
    {
        $this->group = $group;
    }

    /**
     * Show all groups
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $groups = $this->group->getAll();
        return view('groups::groups', compact('groups'));
    }
}