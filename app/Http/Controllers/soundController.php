<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesoundRequest;
use App\Http\Requests\UpdatesoundRequest;
use App\Repositories\soundRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class soundController extends AppBaseController
{
    /** @var  soundRepository */
    private $soundRepository;

    public function __construct(soundRepository $soundRepo)
    {
        $this->soundRepository = $soundRepo;
    }

    /**
     * Display a listing of the sound.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sounds = $this->soundRepository->paginate(10);

        return view('sounds.index')
            ->with('sounds', $sounds);
    }

    /**
     * Show the form for creating a new sound.
     *
     * @return Response
     */
    public function create()
    {
        return view('sounds.create');
    }

    /**
     * Store a newly created sound in storage.
     *
     * @param CreatesoundRequest $request
     *
     * @return Response
     */
    public function store(CreatesoundRequest $request)
    {
        $input = $request->all();

        $sound = $this->soundRepository->create($input);

        Flash::success('Sound saved successfully.');

        return redirect(route('sounds.index'));
    }

    /**
     * Display the specified sound.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sound = $this->soundRepository->find($id);

        if (empty($sound)) {
            Flash::error('Sound not found');

            return redirect(route('sounds.index'));
        }

        return view('sounds.show')->with('sound', $sound);
    }

    /**
     * Show the form for editing the specified sound.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sound = $this->soundRepository->find($id);

        if (empty($sound)) {
            Flash::error('Sound not found');

            return redirect(route('sounds.index'));
        }

        return view('sounds.edit')->with('sound', $sound);
    }

    /**
     * Update the specified sound in storage.
     *
     * @param int $id
     * @param UpdatesoundRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesoundRequest $request)
    {
        $sound = $this->soundRepository->find($id);

        if (empty($sound)) {
            Flash::error('Sound not found');

            return redirect(route('sounds.index'));
        }

        $sound = $this->soundRepository->update($request->all(), $id);

        Flash::success('Sound updated successfully.');

        return redirect(route('sounds.index'));
    }

    /**
     * Remove the specified sound from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sound = $this->soundRepository->find($id);

        if (empty($sound)) {
            Flash::error('Sound not found');

            return redirect(route('sounds.index'));
        }

        $this->soundRepository->delete($id);

        Flash::success('Sound deleted successfully.');

        return redirect(route('sounds.index'));
    }
}
