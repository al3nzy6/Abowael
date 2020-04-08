<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createsms_groupsRequest;
use App\Http\Requests\Updatesms_groupsRequest;
use App\Repositories\sms_groupsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sms_groupsController extends AppBaseController
{
    /** @var  sms_groupsRepository */
    private $smsGroupsRepository;

    public function __construct(sms_groupsRepository $smsGroupsRepo)
    {
        $this->smsGroupsRepository = $smsGroupsRepo;
    }

    /**
     * Display a listing of the sms_groups.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $smsGroups = $this->smsGroupsRepository->paginate(10);

        return view('sms_groups.index')
            ->with('smsGroups', $smsGroups);
    }

    /**
     * Show the form for creating a new sms_groups.
     *
     * @return Response
     */
    public function create()
    {
        return view('sms_groups.create');
    }

    /**
     * Store a newly created sms_groups in storage.
     *
     * @param Createsms_groupsRequest $request
     *
     * @return Response
     */
    public function store(Createsms_groupsRequest $request)
    {
        $input = $request->all();

        $smsGroups = $this->smsGroupsRepository->create($input);

        Flash::success('Sms Groups saved successfully.');

        return redirect(route('smsGroups.index'));
    }

    /**
     * Display the specified sms_groups.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $smsGroups = $this->smsGroupsRepository->find($id);

        if (empty($smsGroups)) {
            Flash::error('Sms Groups not found');

            return redirect(route('smsGroups.index'));
        }

        return view('sms_groups.show')->with('smsGroups', $smsGroups);
    }

    /**
     * Show the form for editing the specified sms_groups.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $smsGroups = $this->smsGroupsRepository->find($id);

        if (empty($smsGroups)) {
            Flash::error('Sms Groups not found');

            return redirect(route('smsGroups.index'));
        }

        return view('sms_groups.edit')->with('smsGroups', $smsGroups);
    }

    /**
     * Update the specified sms_groups in storage.
     *
     * @param int $id
     * @param Updatesms_groupsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesms_groupsRequest $request)
    {
        $smsGroups = $this->smsGroupsRepository->find($id);

        if (empty($smsGroups)) {
            Flash::error('Sms Groups not found');

            return redirect(route('smsGroups.index'));
        }

        $smsGroups = $this->smsGroupsRepository->update($request->all(), $id);

        Flash::success('Sms Groups updated successfully.');

        return redirect(route('smsGroups.index'));
    }

    /**
     * Remove the specified sms_groups from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $smsGroups = $this->smsGroupsRepository->find($id);

        if (empty($smsGroups)) {
            Flash::error('Sms Groups not found');

            return redirect(route('smsGroups.index'));
        }

        $this->smsGroupsRepository->delete($id);

        Flash::success('Sms Groups deleted successfully.');

        return redirect(route('smsGroups.index'));
    }
}
