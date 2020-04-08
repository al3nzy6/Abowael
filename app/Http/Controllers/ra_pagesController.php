<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_pagesRequest;
use App\Http\Requests\Updatera_pagesRequest;
use App\Repositories\ra_pagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_pagesController extends AppBaseController
{
    /** @var  ra_pagesRepository */
    private $raPagesRepository;

    public function __construct(ra_pagesRepository $raPagesRepo)
    {
        $this->raPagesRepository = $raPagesRepo;
    }

    /**
     * Display a listing of the ra_pages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raPages = $this->raPagesRepository->paginate(10);

        return view('ra_pages.index')
            ->with('raPages', $raPages);
    }

    /**
     * Show the form for creating a new ra_pages.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_pages.create');
    }

    /**
     * Store a newly created ra_pages in storage.
     *
     * @param Createra_pagesRequest $request
     *
     * @return Response
     */
    public function store(Createra_pagesRequest $request)
    {
        $input = $request->all();

        $raPages = $this->raPagesRepository->create($input);

        Flash::success('Ra Pages saved successfully.');

        return redirect(route('raPages.index'));
    }

    /**
     * Display the specified ra_pages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raPages = $this->raPagesRepository->find($id);

        if (empty($raPages)) {
            Flash::error('Ra Pages not found');

            return redirect(route('raPages.index'));
        }

        return view('ra_pages.show')->with('raPages', $raPages);
    }

    /**
     * Show the form for editing the specified ra_pages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raPages = $this->raPagesRepository->find($id);

        if (empty($raPages)) {
            Flash::error('Ra Pages not found');

            return redirect(route('raPages.index'));
        }

        return view('ra_pages.edit')->with('raPages', $raPages);
    }

    /**
     * Update the specified ra_pages in storage.
     *
     * @param int $id
     * @param Updatera_pagesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_pagesRequest $request)
    {
        $raPages = $this->raPagesRepository->find($id);

        if (empty($raPages)) {
            Flash::error('Ra Pages not found');

            return redirect(route('raPages.index'));
        }

        $raPages = $this->raPagesRepository->update($request->all(), $id);

        Flash::success('Ra Pages updated successfully.');

        return redirect(route('raPages.index'));
    }

    /**
     * Remove the specified ra_pages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raPages = $this->raPagesRepository->find($id);

        if (empty($raPages)) {
            Flash::error('Ra Pages not found');

            return redirect(route('raPages.index'));
        }

        $this->raPagesRepository->delete($id);

        Flash::success('Ra Pages deleted successfully.');

        return redirect(route('raPages.index'));
    }
}
