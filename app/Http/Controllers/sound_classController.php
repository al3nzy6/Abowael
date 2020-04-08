<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createsound_classRequest;
use App\Http\Requests\Updatesound_classRequest;
use App\Repositories\sound_classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sound_classController extends AppBaseController
{
    /** @var  sound_classRepository */
    private $soundClassRepository;

    public function __construct(sound_classRepository $soundClassRepo)
    {
        $this->soundClassRepository = $soundClassRepo;
    }

    /**
     * Display a listing of the sound_class.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $soundClasses = $this->soundClassRepository->paginate(10);

        return view('sound_classes.index')
            ->with('soundClasses', $soundClasses);
    }

    /**
     * Show the form for creating a new sound_class.
     *
     * @return Response
     */
    public function create()
    {
        return view('sound_classes.create');
    }

    /**
     * Store a newly created sound_class in storage.
     *
     * @param Createsound_classRequest $request
     *
     * @return Response
     */
    public function store(Createsound_classRequest $request)
    {
        $input = $request->all();

        $soundClass = $this->soundClassRepository->create($input);

        Flash::success('Sound Class saved successfully.');

        return redirect(route('soundClasses.index'));
    }

    /**
     * Display the specified sound_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soundClass = $this->soundClassRepository->find($id);

        if (empty($soundClass)) {
            Flash::error('Sound Class not found');

            return redirect(route('soundClasses.index'));
        }

        return view('sound_classes.show')->with('soundClass', $soundClass);
    }

    /**
     * Show the form for editing the specified sound_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soundClass = $this->soundClassRepository->find($id);

        if (empty($soundClass)) {
            Flash::error('Sound Class not found');

            return redirect(route('soundClasses.index'));
        }

        return view('sound_classes.edit')->with('soundClass', $soundClass);
    }

    /**
     * Update the specified sound_class in storage.
     *
     * @param int $id
     * @param Updatesound_classRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesound_classRequest $request)
    {
        $soundClass = $this->soundClassRepository->find($id);

        if (empty($soundClass)) {
            Flash::error('Sound Class not found');

            return redirect(route('soundClasses.index'));
        }

        $soundClass = $this->soundClassRepository->update($request->all(), $id);

        Flash::success('Sound Class updated successfully.');

        return redirect(route('soundClasses.index'));
    }

    /**
     * Remove the specified sound_class from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soundClass = $this->soundClassRepository->find($id);

        if (empty($soundClass)) {
            Flash::error('Sound Class not found');

            return redirect(route('soundClasses.index'));
        }

        $this->soundClassRepository->delete($id);

        Flash::success('Sound Class deleted successfully.');

        return redirect(route('soundClasses.index'));
    }
}
