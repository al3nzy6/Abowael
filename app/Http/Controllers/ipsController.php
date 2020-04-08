<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateipsRequest;
use App\Http\Requests\UpdateipsRequest;
use App\Repositories\ipsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ipsController extends AppBaseController
{
    /** @var  ipsRepository */
    private $ipsRepository;

    public function __construct(ipsRepository $ipsRepo)
    {
        $this->ipsRepository = $ipsRepo;
    }

    /**
     * Display a listing of the ips.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ips = $this->ipsRepository->paginate(10);

        return view('ips.index')
            ->with('ips', $ips);
    }

    /**
     * Show the form for creating a new ips.
     *
     * @return Response
     */
    public function create()
    {
        return view('ips.create');
    }

    /**
     * Store a newly created ips in storage.
     *
     * @param CreateipsRequest $request
     *
     * @return Response
     */
    public function store(CreateipsRequest $request)
    {
        $input = $request->all();

        $ips = $this->ipsRepository->create($input);

        Flash::success('Ips saved successfully.');

        return redirect(route('ips.index'));
    }

    /**
     * Display the specified ips.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ips = $this->ipsRepository->find($id);

        if (empty($ips)) {
            Flash::error('Ips not found');

            return redirect(route('ips.index'));
        }

        return view('ips.show')->with('ips', $ips);
    }

    /**
     * Show the form for editing the specified ips.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ips = $this->ipsRepository->find($id);

        if (empty($ips)) {
            Flash::error('Ips not found');

            return redirect(route('ips.index'));
        }

        return view('ips.edit')->with('ips', $ips);
    }

    /**
     * Update the specified ips in storage.
     *
     * @param int $id
     * @param UpdateipsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateipsRequest $request)
    {
        $ips = $this->ipsRepository->find($id);

        if (empty($ips)) {
            Flash::error('Ips not found');

            return redirect(route('ips.index'));
        }

        $ips = $this->ipsRepository->update($request->all(), $id);

        Flash::success('Ips updated successfully.');

        return redirect(route('ips.index'));
    }

    /**
     * Remove the specified ips from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ips = $this->ipsRepository->find($id);

        if (empty($ips)) {
            Flash::error('Ips not found');

            return redirect(route('ips.index'));
        }

        $this->ipsRepository->delete($id);

        Flash::success('Ips deleted successfully.');

        return redirect(route('ips.index'));
    }
}
