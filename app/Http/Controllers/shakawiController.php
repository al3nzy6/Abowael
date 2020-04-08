<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateshakawiRequest;
use App\Http\Requests\UpdateshakawiRequest;
use App\Repositories\shakawiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class shakawiController extends AppBaseController
{
    /** @var  shakawiRepository */
    private $shakawiRepository;

    public function __construct(shakawiRepository $shakawiRepo)
    {
        $this->shakawiRepository = $shakawiRepo;
    }

    /**
     * Display a listing of the shakawi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shakawis = $this->shakawiRepository->paginate(10);

        return view('shakawis.index')
            ->with('shakawis', $shakawis);
    }

    /**
     * Show the form for creating a new shakawi.
     *
     * @return Response
     */
    public function create()
    {
        return view('shakawis.create');
    }

    /**
     * Store a newly created shakawi in storage.
     *
     * @param CreateshakawiRequest $request
     *
     * @return Response
     */
    public function store(CreateshakawiRequest $request)
    {
        $input = $request->all();

        $shakawi = $this->shakawiRepository->create($input);

        Flash::success('Shakawi saved successfully.');

        return redirect(route('shakawis.index'));
    }

    /**
     * Display the specified shakawi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shakawi = $this->shakawiRepository->find($id);

        if (empty($shakawi)) {
            Flash::error('Shakawi not found');

            return redirect(route('shakawis.index'));
        }

        return view('shakawis.show')->with('shakawi', $shakawi);
    }

    /**
     * Show the form for editing the specified shakawi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shakawi = $this->shakawiRepository->find($id);

        if (empty($shakawi)) {
            Flash::error('Shakawi not found');

            return redirect(route('shakawis.index'));
        }

        return view('shakawis.edit')->with('shakawi', $shakawi);
    }

    /**
     * Update the specified shakawi in storage.
     *
     * @param int $id
     * @param UpdateshakawiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateshakawiRequest $request)
    {
        $shakawi = $this->shakawiRepository->find($id);

        if (empty($shakawi)) {
            Flash::error('Shakawi not found');

            return redirect(route('shakawis.index'));
        }

        $shakawi = $this->shakawiRepository->update($request->all(), $id);

        Flash::success('Shakawi updated successfully.');

        return redirect(route('shakawis.index'));
    }

    /**
     * Remove the specified shakawi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shakawi = $this->shakawiRepository->find($id);

        if (empty($shakawi)) {
            Flash::error('Shakawi not found');

            return redirect(route('shakawis.index'));
        }

        $this->shakawiRepository->delete($id);

        Flash::success('Shakawi deleted successfully.');

        return redirect(route('shakawis.index'));
    }
}
