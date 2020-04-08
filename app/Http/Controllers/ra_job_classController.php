<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_job_classRequest;
use App\Http\Requests\Updatera_job_classRequest;
use App\Repositories\ra_job_classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_job_classController extends AppBaseController
{
    /** @var  ra_job_classRepository */
    private $raJobClassRepository;

    public function __construct(ra_job_classRepository $raJobClassRepo)
    {
        $this->raJobClassRepository = $raJobClassRepo;
    }

    /**
     * Display a listing of the ra_job_class.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raJobClasses = $this->raJobClassRepository->paginate(10);

        return view('ra_job_classes.index')
            ->with('raJobClasses', $raJobClasses);
    }

    /**
     * Show the form for creating a new ra_job_class.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_job_classes.create');
    }

    /**
     * Store a newly created ra_job_class in storage.
     *
     * @param Createra_job_classRequest $request
     *
     * @return Response
     */
    public function store(Createra_job_classRequest $request)
    {
        $input = $request->all();

        $raJobClass = $this->raJobClassRepository->create($input);

        Flash::success('Ra Job Class saved successfully.');

        return redirect(route('raJobClasses.index'));
    }

    /**
     * Display the specified ra_job_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raJobClass = $this->raJobClassRepository->find($id);

        if (empty($raJobClass)) {
            Flash::error('Ra Job Class not found');

            return redirect(route('raJobClasses.index'));
        }

        return view('ra_job_classes.show')->with('raJobClass', $raJobClass);
    }

    /**
     * Show the form for editing the specified ra_job_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raJobClass = $this->raJobClassRepository->find($id);

        if (empty($raJobClass)) {
            Flash::error('Ra Job Class not found');

            return redirect(route('raJobClasses.index'));
        }

        return view('ra_job_classes.edit')->with('raJobClass', $raJobClass);
    }

    /**
     * Update the specified ra_job_class in storage.
     *
     * @param int $id
     * @param Updatera_job_classRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_job_classRequest $request)
    {
        $raJobClass = $this->raJobClassRepository->find($id);

        if (empty($raJobClass)) {
            Flash::error('Ra Job Class not found');

            return redirect(route('raJobClasses.index'));
        }

        $raJobClass = $this->raJobClassRepository->update($request->all(), $id);

        Flash::success('Ra Job Class updated successfully.');

        return redirect(route('raJobClasses.index'));
    }

    /**
     * Remove the specified ra_job_class from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raJobClass = $this->raJobClassRepository->find($id);

        if (empty($raJobClass)) {
            Flash::error('Ra Job Class not found');

            return redirect(route('raJobClasses.index'));
        }

        $this->raJobClassRepository->delete($id);

        Flash::success('Ra Job Class deleted successfully.');

        return redirect(route('raJobClasses.index'));
    }
}
