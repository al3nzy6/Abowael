<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_usersRequest;
use App\Http\Requests\Updatera_usersRequest;
use App\Repositories\ra_usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_usersController extends AppBaseController
{
    /** @var  ra_usersRepository */
    private $raUsersRepository;

    public function __construct(ra_usersRepository $raUsersRepo)
    {
        $this->raUsersRepository = $raUsersRepo;
    }

    /**
     * Display a listing of the ra_users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raUsers = $this->raUsersRepository->paginate(10);

        return view('ra_users.index')
            ->with('raUsers', $raUsers);
    }

    /**
     * Show the form for creating a new ra_users.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_users.create');
    }

    /**
     * Store a newly created ra_users in storage.
     *
     * @param Createra_usersRequest $request
     *
     * @return Response
     */
    public function store(Createra_usersRequest $request)
    {
        $input = $request->all();

        $raUsers = $this->raUsersRepository->create($input);

        Flash::success('Ra Users saved successfully.');

        return redirect(route('raUsers.index'));
    }

    /**
     * Display the specified ra_users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raUsers = $this->raUsersRepository->find($id);

        if (empty($raUsers)) {
            Flash::error('Ra Users not found');

            return redirect(route('raUsers.index'));
        }

        return view('ra_users.show')->with('raUsers', $raUsers);
    }

    /**
     * Show the form for editing the specified ra_users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raUsers = $this->raUsersRepository->find($id);

        if (empty($raUsers)) {
            Flash::error('Ra Users not found');

            return redirect(route('raUsers.index'));
        }

        return view('ra_users.edit')->with('raUsers', $raUsers);
    }

    /**
     * Update the specified ra_users in storage.
     *
     * @param int $id
     * @param Updatera_usersRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_usersRequest $request)
    {
        $raUsers = $this->raUsersRepository->find($id);

        if (empty($raUsers)) {
            Flash::error('Ra Users not found');

            return redirect(route('raUsers.index'));
        }

        $raUsers = $this->raUsersRepository->update($request->all(), $id);

        Flash::success('Ra Users updated successfully.');

        return redirect(route('raUsers.index'));
    }

    /**
     * Remove the specified ra_users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raUsers = $this->raUsersRepository->find($id);

        if (empty($raUsers)) {
            Flash::error('Ra Users not found');

            return redirect(route('raUsers.index'));
        }

        $this->raUsersRepository->delete($id);

        Flash::success('Ra Users deleted successfully.');

        return redirect(route('raUsers.index'));
    }
}
