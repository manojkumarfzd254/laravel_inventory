<?php

namespace App\Http\Controllers\Backend\Page;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Page\PageRepository;
use App\Http\Requests\Backend\Page\ManagePageRequest;

/**
 * Class PagesTableController.
 */
class PagesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var PageRepository
     */
    protected $page;

    /**
     * contructor to initialize repository object
     * @param PageRepository $page;
     */
    public function __construct(PageRepository $page)
    {
        $this->page = $page;
    }

    /**
     * This method return the data of the model
     * @param ManagePageRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePageRequest $request)
    {
        return Datatables::of($this->page->getForDataTable())
            ->escapeColumns(['title'])
            ->addColumn('status', function ($page) {
                return $page->status_label;
            })
            ->addColumn('created_at', function ($page) {
                return $page->created_at->toDateString();
            })
            ->addColumn('created_by', function ($page) {
                return $page->created_by;
            })
            ->addColumn('actions', function ($page) {
                return $page->action_buttons;
            })
            ->make(true);
    }
}
