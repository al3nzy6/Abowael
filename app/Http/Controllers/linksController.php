<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelinksRequest;
use App\Http\Requests\UpdatelinksRequest;
use App\Repositories\linksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class linksController extends AppBaseController
{
    /** @var  linksRepository */
    private $linksRepository;

    public function __construct(linksRepository $linksRepo)
    {
        $this->linksRepository = $linksRepo;
    }

    /**
     * Display a listing of the links.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $links = $this->linksRepository->paginate(10);

        return view('links.index')
            ->with('links', $links);
    }

    /**
     * Show the form for creating a new links.
     *
     * @return Response
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created links in storage.
     *
     * @param CreatelinksRequest $request
     *
     * @return Response
     */
    public function store(CreatelinksRequest $request)
    {
        $input = $request->all();

        $links = $this->linksRepository->create($input);

        Flash::success('Links saved successfully.');

        return redirect(route('links.index'));
    }

    /**
     * Display the specified links.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        return view('links.show')->with('links', $links);
    }

    /**
     * Show the form for editing the specified links.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        return view('links.edit')->with('links', $links);
    }

    /**
     * Update the specified links in storage.
     *
     * @param int $id
     * @param UpdatelinksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelinksRequest $request)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        $links = $this->linksRepository->update($request->all(), $id);

        Flash::success('Links updated successfully.');

        return redirect(route('links.index'));
    }

    /**
     * Remove the specified links from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        $this->linksRepository->delete($id);

        Flash::success('Links deleted successfully.');

        return redirect(route('links.index'));
    }
}
