<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehegoogRequest;
use App\Http\Requests\UpdatehegoogRequest;
use App\Repositories\hegoogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class hegoogController extends AppBaseController
{
    /** @var  hegoogRepository */
    private $hegoogRepository;

    public function __construct(hegoogRepository $hegoogRepo)
    {
        $this->hegoogRepository = $hegoogRepo;
    }

    /**
     * Display a listing of the hegoog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hegoogs = $this->hegoogRepository->paginate(10);

        return view('hegoogs.index')
            ->with('hegoogs', $hegoogs);
    }

    /**
     * Show the form for creating a new hegoog.
     *
     * @return Response
     */
    public function create()
    {
        return view('hegoogs.create');
    }

    /**
     * Store a newly created hegoog in storage.
     *
     * @param CreatehegoogRequest $request
     *
     * @return Response
     */
    public function store(CreatehegoogRequest $request)
    {
        $input = $request->all();

        $hegoog = $this->hegoogRepository->create($input);

        Flash::success('Hegoog saved successfully.');

        return redirect(route('hegoogs.index'));
    }

    /**
     * Display the specified hegoog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hegoog = $this->hegoogRepository->find($id);

        if (empty($hegoog)) {
            Flash::error('Hegoog not found');

            return redirect(route('hegoogs.index'));
        }

        return view('hegoogs.show')->with('hegoog', $hegoog);
    }

    /**
     * Show the form for editing the specified hegoog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hegoog = $this->hegoogRepository->find($id);

        if (empty($hegoog)) {
            Flash::error('Hegoog not found');

            return redirect(route('hegoogs.index'));
        }

        return view('hegoogs.edit')->with('hegoog', $hegoog);
    }

    /**
     * Update the specified hegoog in storage.
     *
     * @param int $id
     * @param UpdatehegoogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehegoogRequest $request)
    {
        $hegoog = $this->hegoogRepository->find($id);

        if (empty($hegoog)) {
            Flash::error('Hegoog not found');

            return redirect(route('hegoogs.index'));
        }

        $hegoog = $this->hegoogRepository->update($request->all(), $id);

        Flash::success('Hegoog updated successfully.');

        return redirect(route('hegoogs.index'));
    }

    /**
     * Remove the specified hegoog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hegoog = $this->hegoogRepository->find($id);

        if (empty($hegoog)) {
            Flash::error('Hegoog not found');

            return redirect(route('hegoogs.index'));
        }

        $this->hegoogRepository->delete($id);

        Flash::success('Hegoog deleted successfully.');

        return redirect(route('hegoogs.index'));
    }
}
