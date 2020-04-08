<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_contentRequest;
use App\Http\Requests\Updatera_contentRequest;
use App\Repositories\ra_contentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ra_content;
use Flash;
use Response;

class ra_contentController extends AppBaseController
{
    /** @var  ra_contentRepository */
    private $raContentRepository;

    public function __construct(ra_contentRepository $raContentRepo)
    {
        $this->raContentRepository = $raContentRepo;
    }

    /**
     * Display a listing of the ra_content.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raContents = $this->raContentRepository->paginate(10);

        return view('ra_contents.index')
            ->with('raContents', $raContents);
    }

    /**
     * Show the form for creating a new ra_content.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_contents.create');
    }

    /**
     * Store a newly created ra_content in storage.
     *
     * @param Createra_contentRequest $request
     *
     * @return Response
     */
    public function store(Createra_contentRequest $request)
    {
        $input = $request->all();

        $raContent = $this->raContentRepository->create($input);

        Flash::success('Ra Content saved successfully.');

        return redirect(route('raContents.index'));
    }

    /**
     * Display the specified ra_content.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raContent = $this->raContentRepository->find($id);

        if (empty($raContent)) {
            Flash::error('Ra Content not found');

            return redirect(route('raContents.index'));
        }

        return view('ra_contents.show')->with('raContent', $raContent);
    }

    /**
     * Show the form for editing the specified ra_content.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raContent = $this->raContentRepository->find($id);

        if (empty($raContent)) {
            Flash::error('Ra Content not found');

            return redirect(route('raContents.index'));
        }

        return view('ra_contents.edit')->with('raContent', $raContent);
    }

    /**
     * Update the specified ra_content in storage.
     *
     * @param int $id
     * @param Updatera_contentRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_contentRequest $request)
    {
        $raContent = $this->raContentRepository->find($id);

        if (empty($raContent)) {
            Flash::error('Ra Content not found');

            return redirect(route('raContents.index'));
        }

        $raContent = $this->raContentRepository->update($request->all(), $id);

        Flash::success('Ra Content updated successfully.');

        return redirect(route('raContents.index'));
    }

    /**
     * Remove the specified ra_content from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raContent = $this->raContentRepository->find($id);

        if (empty($raContent)) {
            Flash::error('Ra Content not found');

            return redirect(route('raContents.index'));
        }

        $this->raContentRepository->delete($id);

        Flash::success('Ra Content deleted successfully.');

        return redirect(route('raContents.index'));
    }

//
    public function indexShow()
    {
        $raContents = ra_content::inRandomOrder()->limit(2)->where('pages_id', 15)
        ->where('publish', 1)
        ->get();
        $raContents19 = ra_content::inRandomOrder()->limit(3)->where('pages_id', 19)
        ->where('publish', 1)
        ->get();
        return view('pub.content.index')
        ->with('raContents19', $raContents19)
        ->with('raContents', $raContents);
    }

    public function showOne(ra_content $ra_content)
    {
        return view('pub.content.blog')
        ->with('blog', $ra_content);
    }
}
