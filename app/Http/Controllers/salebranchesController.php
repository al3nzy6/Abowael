<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesalebranchesRequest;
use App\Http\Requests\UpdatesalebranchesRequest;
use App\Repositories\salebranchesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class salebranchesController extends AppBaseController
{
    /** @var  salebranchesRepository */
    private $salebranchesRepository;

    public function __construct(salebranchesRepository $salebranchesRepo)
    {
        $this->salebranchesRepository = $salebranchesRepo;
    }

    /**
     * Display a listing of the salebranches.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $salebranches = $this->salebranchesRepository->paginate(10);

        return view('salebranches.index')
            ->with('salebranches', $salebranches);
    }

    /**
     * Show the form for creating a new salebranches.
     *
     * @return Response
     */
    public function create()
    {
        return view('salebranches.create');
    }

    /**
     * Store a newly created salebranches in storage.
     *
     * @param CreatesalebranchesRequest $request
     *
     * @return Response
     */
    public function store(CreatesalebranchesRequest $request)
    {
        $input = $request->all();

        $salebranches = $this->salebranchesRepository->create($input);

        Flash::success('Salebranches saved successfully.');

        return redirect(route('salebranches.index'));
    }

    /**
     * Display the specified salebranches.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salebranches = $this->salebranchesRepository->find($id);

        if (empty($salebranches)) {
            Flash::error('Salebranches not found');

            return redirect(route('salebranches.index'));
        }

        return view('salebranches.show')->with('salebranches', $salebranches);
    }

    /**
     * Show the form for editing the specified salebranches.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salebranches = $this->salebranchesRepository->find($id);

        if (empty($salebranches)) {
            Flash::error('Salebranches not found');

            return redirect(route('salebranches.index'));
        }

        return view('salebranches.edit')->with('salebranches', $salebranches);
    }

    /**
     * Update the specified salebranches in storage.
     *
     * @param int $id
     * @param UpdatesalebranchesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesalebranchesRequest $request)
    {
        $salebranches = $this->salebranchesRepository->find($id);

        if (empty($salebranches)) {
            Flash::error('Salebranches not found');

            return redirect(route('salebranches.index'));
        }

        $salebranches = $this->salebranchesRepository->update($request->all(), $id);

        Flash::success('Salebranches updated successfully.');

        return redirect(route('salebranches.index'));
    }

    /**
     * Remove the specified salebranches from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salebranches = $this->salebranchesRepository->find($id);

        if (empty($salebranches)) {
            Flash::error('Salebranches not found');

            return redirect(route('salebranches.index'));
        }

        $this->salebranchesRepository->delete($id);

        Flash::success('Salebranches deleted successfully.');

        return redirect(route('salebranches.index'));
    }
}
