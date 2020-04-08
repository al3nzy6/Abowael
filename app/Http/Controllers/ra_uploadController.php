<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_uploadRequest;
use App\Http\Requests\Updatera_uploadRequest;
use App\Repositories\ra_uploadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_uploadController extends AppBaseController
{
    /** @var  ra_uploadRepository */
    private $raUploadRepository;

    public function __construct(ra_uploadRepository $raUploadRepo)
    {
        $this->raUploadRepository = $raUploadRepo;
    }

    /**
     * Display a listing of the ra_upload.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raUploads = $this->raUploadRepository->paginate(10);

        return view('ra_uploads.index')
            ->with('raUploads', $raUploads);
    }

    /**
     * Show the form for creating a new ra_upload.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_uploads.create');
    }

    /**
     * Store a newly created ra_upload in storage.
     *
     * @param Createra_uploadRequest $request
     *
     * @return Response
     */
    public function store(Createra_uploadRequest $request)
    {
        $input = $request->all();

        $raUpload = $this->raUploadRepository->create($input);

        Flash::success('Ra Upload saved successfully.');

        return redirect(route('raUploads.index'));
    }

    /**
     * Display the specified ra_upload.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raUpload = $this->raUploadRepository->find($id);

        if (empty($raUpload)) {
            Flash::error('Ra Upload not found');

            return redirect(route('raUploads.index'));
        }

        return view('ra_uploads.show')->with('raUpload', $raUpload);
    }

    /**
     * Show the form for editing the specified ra_upload.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raUpload = $this->raUploadRepository->find($id);

        if (empty($raUpload)) {
            Flash::error('Ra Upload not found');

            return redirect(route('raUploads.index'));
        }

        return view('ra_uploads.edit')->with('raUpload', $raUpload);
    }

    /**
     * Update the specified ra_upload in storage.
     *
     * @param int $id
     * @param Updatera_uploadRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_uploadRequest $request)
    {
        $raUpload = $this->raUploadRepository->find($id);

        if (empty($raUpload)) {
            Flash::error('Ra Upload not found');

            return redirect(route('raUploads.index'));
        }

        $raUpload = $this->raUploadRepository->update($request->all(), $id);

        Flash::success('Ra Upload updated successfully.');

        return redirect(route('raUploads.index'));
    }

    /**
     * Remove the specified ra_upload from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raUpload = $this->raUploadRepository->find($id);

        if (empty($raUpload)) {
            Flash::error('Ra Upload not found');

            return redirect(route('raUploads.index'));
        }

        $this->raUploadRepository->delete($id);

        Flash::success('Ra Upload deleted successfully.');

        return redirect(route('raUploads.index'));
    }
}
