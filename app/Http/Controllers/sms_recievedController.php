<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createsms_recievedRequest;
use App\Http\Requests\Updatesms_recievedRequest;
use App\Repositories\sms_recievedRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sms_recievedController extends AppBaseController
{
    /** @var  sms_recievedRepository */
    private $smsRecievedRepository;

    public function __construct(sms_recievedRepository $smsRecievedRepo)
    {
        $this->smsRecievedRepository = $smsRecievedRepo;
    }

    /**
     * Display a listing of the sms_recieved.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $smsRecieveds = $this->smsRecievedRepository->paginate(10);

        return view('sms_recieveds.index')
            ->with('smsRecieveds', $smsRecieveds);
    }

    /**
     * Show the form for creating a new sms_recieved.
     *
     * @return Response
     */
    public function create()
    {
        return view('sms_recieveds.create');
    }

    /**
     * Store a newly created sms_recieved in storage.
     *
     * @param Createsms_recievedRequest $request
     *
     * @return Response
     */
    public function store(Createsms_recievedRequest $request)
    {
        $input = $request->all();

        $smsRecieved = $this->smsRecievedRepository->create($input);

        Flash::success('Sms Recieved saved successfully.');

        return redirect(route('smsRecieveds.index'));
    }

    /**
     * Display the specified sms_recieved.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $smsRecieved = $this->smsRecievedRepository->find($id);

        if (empty($smsRecieved)) {
            Flash::error('Sms Recieved not found');

            return redirect(route('smsRecieveds.index'));
        }

        return view('sms_recieveds.show')->with('smsRecieved', $smsRecieved);
    }

    /**
     * Show the form for editing the specified sms_recieved.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $smsRecieved = $this->smsRecievedRepository->find($id);

        if (empty($smsRecieved)) {
            Flash::error('Sms Recieved not found');

            return redirect(route('smsRecieveds.index'));
        }

        return view('sms_recieveds.edit')->with('smsRecieved', $smsRecieved);
    }

    /**
     * Update the specified sms_recieved in storage.
     *
     * @param int $id
     * @param Updatesms_recievedRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesms_recievedRequest $request)
    {
        $smsRecieved = $this->smsRecievedRepository->find($id);

        if (empty($smsRecieved)) {
            Flash::error('Sms Recieved not found');

            return redirect(route('smsRecieveds.index'));
        }

        $smsRecieved = $this->smsRecievedRepository->update($request->all(), $id);

        Flash::success('Sms Recieved updated successfully.');

        return redirect(route('smsRecieveds.index'));
    }

    /**
     * Remove the specified sms_recieved from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $smsRecieved = $this->smsRecievedRepository->find($id);

        if (empty($smsRecieved)) {
            Flash::error('Sms Recieved not found');

            return redirect(route('smsRecieveds.index'));
        }

        $this->smsRecievedRepository->delete($id);

        Flash::success('Sms Recieved deleted successfully.');

        return redirect(route('smsRecieveds.index'));
    }
}
