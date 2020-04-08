<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateguestbookRequest;
use App\Http\Requests\UpdateguestbookRequest;
use App\Repositories\guestbookRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class guestbookController extends AppBaseController
{
    /** @var  guestbookRepository */
    private $guestbookRepository;

    public function __construct(guestbookRepository $guestbookRepo)
    {
        $this->guestbookRepository = $guestbookRepo;
    }

    /**
     * Display a listing of the guestbook.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $guestbooks = $this->guestbookRepository->paginate(10);

        return view('guestbooks.index')
            ->with('guestbooks', $guestbooks);
    }

    /**
     * Show the form for creating a new guestbook.
     *
     * @return Response
     */
    public function create()
    {
        return view('guestbooks.create');
    }

    /**
     * Store a newly created guestbook in storage.
     *
     * @param CreateguestbookRequest $request
     *
     * @return Response
     */
    public function store(CreateguestbookRequest $request)
    {
        $input = $request->all();

        $guestbook = $this->guestbookRepository->create($input);

        Flash::success('Guestbook saved successfully.');

        return redirect(route('guestbooks.index'));
    }

    /**
     * Display the specified guestbook.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $guestbook = $this->guestbookRepository->find($id);

        if (empty($guestbook)) {
            Flash::error('Guestbook not found');

            return redirect(route('guestbooks.index'));
        }

        return view('guestbooks.show')->with('guestbook', $guestbook);
    }

    /**
     * Show the form for editing the specified guestbook.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $guestbook = $this->guestbookRepository->find($id);

        if (empty($guestbook)) {
            Flash::error('Guestbook not found');

            return redirect(route('guestbooks.index'));
        }

        return view('guestbooks.edit')->with('guestbook', $guestbook);
    }

    /**
     * Update the specified guestbook in storage.
     *
     * @param int $id
     * @param UpdateguestbookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateguestbookRequest $request)
    {
        $guestbook = $this->guestbookRepository->find($id);

        if (empty($guestbook)) {
            Flash::error('Guestbook not found');

            return redirect(route('guestbooks.index'));
        }

        $guestbook = $this->guestbookRepository->update($request->all(), $id);

        Flash::success('Guestbook updated successfully.');

        return redirect(route('guestbooks.index'));
    }

    /**
     * Remove the specified guestbook from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $guestbook = $this->guestbookRepository->find($id);

        if (empty($guestbook)) {
            Flash::error('Guestbook not found');

            return redirect(route('guestbooks.index'));
        }

        $this->guestbookRepository->delete($id);

        Flash::success('Guestbook deleted successfully.');

        return redirect(route('guestbooks.index'));
    }
}
