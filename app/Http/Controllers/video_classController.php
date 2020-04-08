<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvideo_classRequest;
use App\Http\Requests\Updatevideo_classRequest;
use App\Repositories\video_classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class video_classController extends AppBaseController
{
    /** @var  video_classRepository */
    private $videoClassRepository;

    public function __construct(video_classRepository $videoClassRepo)
    {
        $this->videoClassRepository = $videoClassRepo;
    }

    /**
     * Display a listing of the video_class.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $videoClasses = $this->videoClassRepository->paginate(10);

        return view('video_classes.index')
            ->with('videoClasses', $videoClasses);
    }

    /**
     * Show the form for creating a new video_class.
     *
     * @return Response
     */
    public function create()
    {
        return view('video_classes.create');
    }

    /**
     * Store a newly created video_class in storage.
     *
     * @param Createvideo_classRequest $request
     *
     * @return Response
     */
    public function store(Createvideo_classRequest $request)
    {
        $input = $request->all();

        $videoClass = $this->videoClassRepository->create($input);

        Flash::success('Video Class saved successfully.');

        return redirect(route('videoClasses.index'));
    }

    /**
     * Display the specified video_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $videoClass = $this->videoClassRepository->find($id);

        if (empty($videoClass)) {
            Flash::error('Video Class not found');

            return redirect(route('videoClasses.index'));
        }

        return view('video_classes.show')->with('videoClass', $videoClass);
    }

    /**
     * Show the form for editing the specified video_class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $videoClass = $this->videoClassRepository->find($id);

        if (empty($videoClass)) {
            Flash::error('Video Class not found');

            return redirect(route('videoClasses.index'));
        }

        return view('video_classes.edit')->with('videoClass', $videoClass);
    }

    /**
     * Update the specified video_class in storage.
     *
     * @param int $id
     * @param Updatevideo_classRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevideo_classRequest $request)
    {
        $videoClass = $this->videoClassRepository->find($id);

        if (empty($videoClass)) {
            Flash::error('Video Class not found');

            return redirect(route('videoClasses.index'));
        }

        $videoClass = $this->videoClassRepository->update($request->all(), $id);

        Flash::success('Video Class updated successfully.');

        return redirect(route('videoClasses.index'));
    }

    /**
     * Remove the specified video_class from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $videoClass = $this->videoClassRepository->find($id);

        if (empty($videoClass)) {
            Flash::error('Video Class not found');

            return redirect(route('videoClasses.index'));
        }

        $this->videoClassRepository->delete($id);

        Flash::success('Video Class deleted successfully.');

        return redirect(route('videoClasses.index'));
    }
}
