<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createfailed_jobsRequest;
use App\Http\Requests\Updatefailed_jobsRequest;
use App\Repositories\failed_jobsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class failed_jobsController extends AppBaseController
{
    /** @var  failed_jobsRepository */
    private $failedJobsRepository;

    public function __construct(failed_jobsRepository $failedJobsRepo)
    {
        $this->failedJobsRepository = $failedJobsRepo;
    }

    /**
     * Display a listing of the failed_jobs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $failedJobs = $this->failedJobsRepository->paginate(10);

        return view('failed_jobs.index')
            ->with('failedJobs', $failedJobs);
    }

    /**
     * Show the form for creating a new failed_jobs.
     *
     * @return Response
     */
    public function create()
    {
        return view('failed_jobs.create');
    }

    /**
     * Store a newly created failed_jobs in storage.
     *
     * @param Createfailed_jobsRequest $request
     *
     * @return Response
     */
    public function store(Createfailed_jobsRequest $request)
    {
        $input = $request->all();

        $failedJobs = $this->failedJobsRepository->create($input);

        Flash::success('Failed Jobs saved successfully.');

        return redirect(route('failedJobs.index'));
    }

    /**
     * Display the specified failed_jobs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $failedJobs = $this->failedJobsRepository->find($id);

        if (empty($failedJobs)) {
            Flash::error('Failed Jobs not found');

            return redirect(route('failedJobs.index'));
        }

        return view('failed_jobs.show')->with('failedJobs', $failedJobs);
    }

    /**
     * Show the form for editing the specified failed_jobs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $failedJobs = $this->failedJobsRepository->find($id);

        if (empty($failedJobs)) {
            Flash::error('Failed Jobs not found');

            return redirect(route('failedJobs.index'));
        }

        return view('failed_jobs.edit')->with('failedJobs', $failedJobs);
    }

    /**
     * Update the specified failed_jobs in storage.
     *
     * @param int $id
     * @param Updatefailed_jobsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatefailed_jobsRequest $request)
    {
        $failedJobs = $this->failedJobsRepository->find($id);

        if (empty($failedJobs)) {
            Flash::error('Failed Jobs not found');

            return redirect(route('failedJobs.index'));
        }

        $failedJobs = $this->failedJobsRepository->update($request->all(), $id);

        Flash::success('Failed Jobs updated successfully.');

        return redirect(route('failedJobs.index'));
    }

    /**
     * Remove the specified failed_jobs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $failedJobs = $this->failedJobsRepository->find($id);

        if (empty($failedJobs)) {
            Flash::error('Failed Jobs not found');

            return redirect(route('failedJobs.index'));
        }

        $this->failedJobsRepository->delete($id);

        Flash::success('Failed Jobs deleted successfully.');

        return redirect(route('failedJobs.index'));
    }
}
