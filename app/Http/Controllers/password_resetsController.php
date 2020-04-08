<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpassword_resetsRequest;
use App\Http\Requests\Updatepassword_resetsRequest;
use App\Repositories\password_resetsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class password_resetsController extends AppBaseController
{
    /** @var  password_resetsRepository */
    private $passwordResetsRepository;

    public function __construct(password_resetsRepository $passwordResetsRepo)
    {
        $this->passwordResetsRepository = $passwordResetsRepo;
    }

    /**
     * Display a listing of the password_resets.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $passwordResets = $this->passwordResetsRepository->paginate(10);

        return view('password_resets.index')
            ->with('passwordResets', $passwordResets);
    }

    /**
     * Show the form for creating a new password_resets.
     *
     * @return Response
     */
    public function create()
    {
        return view('password_resets.create');
    }

    /**
     * Store a newly created password_resets in storage.
     *
     * @param Createpassword_resetsRequest $request
     *
     * @return Response
     */
    public function store(Createpassword_resetsRequest $request)
    {
        $input = $request->all();

        $passwordResets = $this->passwordResetsRepository->create($input);

        Flash::success('Password Resets saved successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Display the specified password_resets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.show')->with('passwordResets', $passwordResets);
    }

    /**
     * Show the form for editing the specified password_resets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.edit')->with('passwordResets', $passwordResets);
    }

    /**
     * Update the specified password_resets in storage.
     *
     * @param int $id
     * @param Updatepassword_resetsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepassword_resetsRequest $request)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        $passwordResets = $this->passwordResetsRepository->update($request->all(), $id);

        Flash::success('Password Resets updated successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Remove the specified password_resets from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $passwordResets = $this->passwordResetsRepository->find($id);

        if (empty($passwordResets)) {
            Flash::error('Password Resets not found');

            return redirect(route('passwordResets.index'));
        }

        $this->passwordResetsRepository->delete($id);

        Flash::success('Password Resets deleted successfully.');

        return redirect(route('passwordResets.index'));
    }
}
