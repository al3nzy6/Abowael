<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_useronlineRequest;
use App\Http\Requests\Updatera_useronlineRequest;
use App\Repositories\ra_useronlineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_useronlineController extends AppBaseController
{
    /** @var  ra_useronlineRepository */
    private $raUseronlineRepository;

    public function __construct(ra_useronlineRepository $raUseronlineRepo)
    {
        $this->raUseronlineRepository = $raUseronlineRepo;
    }

    /**
     * Display a listing of the ra_useronline.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raUseronlines = $this->raUseronlineRepository->paginate(10);

        return view('ra_useronlines.index')
            ->with('raUseronlines', $raUseronlines);
    }

    /**
     * Show the form for creating a new ra_useronline.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_useronlines.create');
    }

    /**
     * Store a newly created ra_useronline in storage.
     *
     * @param Createra_useronlineRequest $request
     *
     * @return Response
     */
    public function store(Createra_useronlineRequest $request)
    {
        $input = $request->all();

        $raUseronline = $this->raUseronlineRepository->create($input);

        Flash::success('Ra Useronline saved successfully.');

        return redirect(route('raUseronlines.index'));
    }

    /**
     * Display the specified ra_useronline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raUseronline = $this->raUseronlineRepository->find($id);

        if (empty($raUseronline)) {
            Flash::error('Ra Useronline not found');

            return redirect(route('raUseronlines.index'));
        }

        return view('ra_useronlines.show')->with('raUseronline', $raUseronline);
    }

    /**
     * Show the form for editing the specified ra_useronline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raUseronline = $this->raUseronlineRepository->find($id);

        if (empty($raUseronline)) {
            Flash::error('Ra Useronline not found');

            return redirect(route('raUseronlines.index'));
        }

        return view('ra_useronlines.edit')->with('raUseronline', $raUseronline);
    }

    /**
     * Update the specified ra_useronline in storage.
     *
     * @param int $id
     * @param Updatera_useronlineRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_useronlineRequest $request)
    {
        $raUseronline = $this->raUseronlineRepository->find($id);

        if (empty($raUseronline)) {
            Flash::error('Ra Useronline not found');

            return redirect(route('raUseronlines.index'));
        }

        $raUseronline = $this->raUseronlineRepository->update($request->all(), $id);

        Flash::success('Ra Useronline updated successfully.');

        return redirect(route('raUseronlines.index'));
    }

    /**
     * Remove the specified ra_useronline from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raUseronline = $this->raUseronlineRepository->find($id);

        if (empty($raUseronline)) {
            Flash::error('Ra Useronline not found');

            return redirect(route('raUseronlines.index'));
        }

        $this->raUseronlineRepository->delete($id);

        Flash::success('Ra Useronline deleted successfully.');

        return redirect(route('raUseronlines.index'));
    }
}
