<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmail_listRequest;
use App\Http\Requests\Updatemail_listRequest;
use App\Repositories\mail_listRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mail_listController extends AppBaseController
{
    /** @var  mail_listRepository */
    private $mailListRepository;

    public function __construct(mail_listRepository $mailListRepo)
    {
        $this->mailListRepository = $mailListRepo;
    }

    /**
     * Display a listing of the mail_list.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mailLists = $this->mailListRepository->paginate(10);

        return view('mail_lists.index')
            ->with('mailLists', $mailLists);
    }

    /**
     * Show the form for creating a new mail_list.
     *
     * @return Response
     */
    public function create()
    {
        return view('mail_lists.create');
    }

    /**
     * Store a newly created mail_list in storage.
     *
     * @param Createmail_listRequest $request
     *
     * @return Response
     */
    public function store(Createmail_listRequest $request)
    {
        $input = $request->all();

        $mailList = $this->mailListRepository->create($input);

        Flash::success('Mail List saved successfully.');

        return redirect(route('mailLists.index'));
    }

    /**
     * Display the specified mail_list.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mailList = $this->mailListRepository->find($id);

        if (empty($mailList)) {
            Flash::error('Mail List not found');

            return redirect(route('mailLists.index'));
        }

        return view('mail_lists.show')->with('mailList', $mailList);
    }

    /**
     * Show the form for editing the specified mail_list.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mailList = $this->mailListRepository->find($id);

        if (empty($mailList)) {
            Flash::error('Mail List not found');

            return redirect(route('mailLists.index'));
        }

        return view('mail_lists.edit')->with('mailList', $mailList);
    }

    /**
     * Update the specified mail_list in storage.
     *
     * @param int $id
     * @param Updatemail_listRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemail_listRequest $request)
    {
        $mailList = $this->mailListRepository->find($id);

        if (empty($mailList)) {
            Flash::error('Mail List not found');

            return redirect(route('mailLists.index'));
        }

        $mailList = $this->mailListRepository->update($request->all(), $id);

        Flash::success('Mail List updated successfully.');

        return redirect(route('mailLists.index'));
    }

    /**
     * Remove the specified mail_list from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mailList = $this->mailListRepository->find($id);

        if (empty($mailList)) {
            Flash::error('Mail List not found');

            return redirect(route('mailLists.index'));
        }

        $this->mailListRepository->delete($id);

        Flash::success('Mail List deleted successfully.');

        return redirect(route('mailLists.index'));
    }
}
