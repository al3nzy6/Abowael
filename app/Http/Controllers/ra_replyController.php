<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_replyRequest;
use App\Http\Requests\Updatera_replyRequest;
use App\Repositories\ra_replyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_replyController extends AppBaseController
{
    /** @var  ra_replyRepository */
    private $raReplyRepository;

    public function __construct(ra_replyRepository $raReplyRepo)
    {
        $this->raReplyRepository = $raReplyRepo;
    }

    /**
     * Display a listing of the ra_reply.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raReplies = $this->raReplyRepository->paginate(10);

        return view('ra_replies.index')
            ->with('raReplies', $raReplies);
    }

    /**
     * Show the form for creating a new ra_reply.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_replies.create');
    }

    /**
     * Store a newly created ra_reply in storage.
     *
     * @param Createra_replyRequest $request
     *
     * @return Response
     */
    public function store(Createra_replyRequest $request)
    {
        $input = $request->all();

        $raReply = $this->raReplyRepository->create($input);

        Flash::success('Ra Reply saved successfully.');

        return redirect(route('raReplies.index'));
    }

    /**
     * Display the specified ra_reply.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raReply = $this->raReplyRepository->find($id);

        if (empty($raReply)) {
            Flash::error('Ra Reply not found');

            return redirect(route('raReplies.index'));
        }

        return view('ra_replies.show')->with('raReply', $raReply);
    }

    /**
     * Show the form for editing the specified ra_reply.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raReply = $this->raReplyRepository->find($id);

        if (empty($raReply)) {
            Flash::error('Ra Reply not found');

            return redirect(route('raReplies.index'));
        }

        return view('ra_replies.edit')->with('raReply', $raReply);
    }

    /**
     * Update the specified ra_reply in storage.
     *
     * @param int $id
     * @param Updatera_replyRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_replyRequest $request)
    {
        $raReply = $this->raReplyRepository->find($id);

        if (empty($raReply)) {
            Flash::error('Ra Reply not found');

            return redirect(route('raReplies.index'));
        }

        $raReply = $this->raReplyRepository->update($request->all(), $id);

        Flash::success('Ra Reply updated successfully.');

        return redirect(route('raReplies.index'));
    }

    /**
     * Remove the specified ra_reply from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raReply = $this->raReplyRepository->find($id);

        if (empty($raReply)) {
            Flash::error('Ra Reply not found');

            return redirect(route('raReplies.index'));
        }

        $this->raReplyRepository->delete($id);

        Flash::success('Ra Reply deleted successfully.');

        return redirect(route('raReplies.index'));
    }
}
