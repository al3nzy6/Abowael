<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_counterRequest;
use App\Http\Requests\Updatera_counterRequest;
use App\Repositories\ra_counterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_counterController extends AppBaseController
{
    /** @var  ra_counterRepository */
    private $raCounterRepository;

    public function __construct(ra_counterRepository $raCounterRepo)
    {
        $this->raCounterRepository = $raCounterRepo;
    }

    /**
     * Display a listing of the ra_counter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raCounters = $this->raCounterRepository->paginate(10);

        return view('ra_counters.index')
            ->with('raCounters', $raCounters);
    }

    /**
     * Show the form for creating a new ra_counter.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_counters.create');
    }

    /**
     * Store a newly created ra_counter in storage.
     *
     * @param Createra_counterRequest $request
     *
     * @return Response
     */
    public function store(Createra_counterRequest $request)
    {
        $input = $request->all();

        $raCounter = $this->raCounterRepository->create($input);

        Flash::success('Ra Counter saved successfully.');

        return redirect(route('raCounters.index'));
    }

    /**
     * Display the specified ra_counter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raCounter = $this->raCounterRepository->find($id);

        if (empty($raCounter)) {
            Flash::error('Ra Counter not found');

            return redirect(route('raCounters.index'));
        }

        return view('ra_counters.show')->with('raCounter', $raCounter);
    }

    /**
     * Show the form for editing the specified ra_counter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raCounter = $this->raCounterRepository->find($id);

        if (empty($raCounter)) {
            Flash::error('Ra Counter not found');

            return redirect(route('raCounters.index'));
        }

        return view('ra_counters.edit')->with('raCounter', $raCounter);
    }

    /**
     * Update the specified ra_counter in storage.
     *
     * @param int $id
     * @param Updatera_counterRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_counterRequest $request)
    {
        $raCounter = $this->raCounterRepository->find($id);

        if (empty($raCounter)) {
            Flash::error('Ra Counter not found');

            return redirect(route('raCounters.index'));
        }

        $raCounter = $this->raCounterRepository->update($request->all(), $id);

        Flash::success('Ra Counter updated successfully.');

        return redirect(route('raCounters.index'));
    }

    /**
     * Remove the specified ra_counter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raCounter = $this->raCounterRepository->find($id);

        if (empty($raCounter)) {
            Flash::error('Ra Counter not found');

            return redirect(route('raCounters.index'));
        }

        $this->raCounterRepository->delete($id);

        Flash::success('Ra Counter deleted successfully.');

        return redirect(route('raCounters.index'));
    }
}
