<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_classRequest;
use App\Http\Requests\Updatera_classRequest;
use App\Repositories\ra_classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ra_class;
use App\Models\ra_content;
use Auth;
use Flash;
use Response;

class ra_classController extends AppBaseController
{
    /** @var  ra_classRepository */
    private $raClassRepository;

    public function __construct(ra_classRepository $raClassRepo)
    {
        $this->raClassRepository = $raClassRepo;
    }

    /**
     * Display a listing of the ra_class.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raClasses = $this->raClassRepository->paginate(10);

        return view('ra_classes.index')
            ->with('raClasses', $raClasses);
    }

    /**
     * Show the form for creating a new ra_class.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_classes.create');
    }

    /**
     * Store a newly created ra_class in storage.
     *
     * @param Createra_classRequest $request
     *
     * @return Response
     */
    public function store(Createra_classRequest $request)
    {
        $input = $request->all();

        $raClass = $this->raClassRepository->create($input);

        Flash::success('Ra Class saved successfully.');

        return redirect(route('raClasses.index'));
    }

    /**
     * Display the specified ra_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raClass = $this->raClassRepository->find($id);

        if (empty($raClass)) {
            Flash::error('Ra Class not found');

            return redirect(route('raClasses.index'));
        }

        return view('ra_classes.show')->with('raClass', $raClass);
    }

    /**
     * Show the form for editing the specified ra_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raClass = $this->raClassRepository->find($id);

        if (empty($raClass)) {
            Flash::error('Ra Class not found');

            return redirect(route('raClasses.index'));
        }

        return view('ra_classes.edit')->with('raClass', $raClass);
    }

    /**
     * Update the specified ra_class in storage.
     *
     * @param int $id
     * @param Updatera_classRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_classRequest $request)
    {
        $raClass = $this->raClassRepository->find($id);

        if (empty($raClass)) {
            Flash::error('Ra Class not found');

            return redirect(route('raClasses.index'));
        }

        $raClass = $this->raClassRepository->update($request->all(), $id);

        Flash::success('Ra Class updated successfully.');

        return redirect(route('raClasses.index'));
    }

    /**
     * Remove the specified ra_class from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raClass = $this->raClassRepository->find($id);

        if (empty($raClass)) {
            Flash::error('Ra Class not found');

            return redirect(route('raClasses.index'));
        }

        $this->raClassRepository->delete($id);

        Flash::success('Ra Class deleted successfully.');

        return redirect(route('raClasses.index'));
    }

    public function showBlogSection(ra_class $ra_class)
    {
        if (Auth::check() && Auth::user()->is_admin === 1 ) {
            $blogs = ra_content::where('class_id', $ra_class->id)->orderBy('id', 'desc')->get();
        }else{
            $blogs = ra_content::where('class_id', $ra_class->id)->where('publish', 1)->orderBy('id', 'desc')->get();
        }
        return view('pub.content.section')
        ->with('section', $ra_class)
        ->with('blogs', $blogs);
    }
}
