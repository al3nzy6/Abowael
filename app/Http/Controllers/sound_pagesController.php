<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createsound_pagesRequest;
use App\Http\Requests\Updatesound_pagesRequest;
use App\Repositories\sound_pagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sound_pagesController extends AppBaseController
{
    /** @var  sound_pagesRepository */
    private $soundPagesRepository;

    public function __construct(sound_pagesRepository $soundPagesRepo)
    {
        $this->soundPagesRepository = $soundPagesRepo;
    }

    /**
     * Display a listing of the sound_pages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $soundPages = $this->soundPagesRepository->paginate(10);

        return view('sound_pages.index')
            ->with('soundPages', $soundPages);
    }

    /**
     * Show the form for creating a new sound_pages.
     *
     * @return Response
     */
    public function create()
    {
        return view('sound_pages.create');
    }

    /**
     * Store a newly created sound_pages in storage.
     *
     * @param Createsound_pagesRequest $request
     *
     * @return Response
     */
    public function store(Createsound_pagesRequest $request)
    {
        $input = $request->all();

        $soundPages = $this->soundPagesRepository->create($input);

        Flash::success('Sound Pages saved successfully.');

        return redirect(route('soundPages.index'));
    }

    /**
     * Display the specified sound_pages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soundPages = $this->soundPagesRepository->find($id);

        if (empty($soundPages)) {
            Flash::error('Sound Pages not found');

            return redirect(route('soundPages.index'));
        }

        return view('sound_pages.show')->with('soundPages', $soundPages);
    }

    /**
     * Show the form for editing the specified sound_pages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soundPages = $this->soundPagesRepository->find($id);

        if (empty($soundPages)) {
            Flash::error('Sound Pages not found');

            return redirect(route('soundPages.index'));
        }

        return view('sound_pages.edit')->with('soundPages', $soundPages);
    }

    /**
     * Update the specified sound_pages in storage.
     *
     * @param int $id
     * @param Updatesound_pagesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatesound_pagesRequest $request)
    {
        $soundPages = $this->soundPagesRepository->find($id);

        if (empty($soundPages)) {
            Flash::error('Sound Pages not found');

            return redirect(route('soundPages.index'));
        }

        $soundPages = $this->soundPagesRepository->update($request->all(), $id);

        Flash::success('Sound Pages updated successfully.');

        return redirect(route('soundPages.index'));
    }

    /**
     * Remove the specified sound_pages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soundPages = $this->soundPagesRepository->find($id);

        if (empty($soundPages)) {
            Flash::error('Sound Pages not found');

            return redirect(route('soundPages.index'));
        }

        $this->soundPagesRepository->delete($id);

        Flash::success('Sound Pages deleted successfully.');

        return redirect(route('soundPages.index'));
    }
}
