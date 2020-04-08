<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createra_bookRequest;
use App\Http\Requests\Updatera_bookRequest;
use App\Repositories\ra_bookRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ra_bookController extends AppBaseController
{
    /** @var  ra_bookRepository */
    private $raBookRepository;

    public function __construct(ra_bookRepository $raBookRepo)
    {
        $this->raBookRepository = $raBookRepo;
    }

    /**
     * Display a listing of the ra_book.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raBooks = $this->raBookRepository->paginate(10);

        return view('ra_books.index')
            ->with('raBooks', $raBooks);
    }

    /**
     * Show the form for creating a new ra_book.
     *
     * @return Response
     */
    public function create()
    {
        return view('ra_books.create');
    }

    /**
     * Store a newly created ra_book in storage.
     *
     * @param Createra_bookRequest $request
     *
     * @return Response
     */
    public function store(Createra_bookRequest $request)
    {
        $input = $request->all();

        $raBook = $this->raBookRepository->create($input);

        Flash::success('Ra Book saved successfully.');

        return redirect(route('raBooks.index'));
    }

    /**
     * Display the specified ra_book.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raBook = $this->raBookRepository->find($id);

        if (empty($raBook)) {
            Flash::error('Ra Book not found');

            return redirect(route('raBooks.index'));
        }

        return view('ra_books.show')->with('raBook', $raBook);
    }

    /**
     * Show the form for editing the specified ra_book.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raBook = $this->raBookRepository->find($id);

        if (empty($raBook)) {
            Flash::error('Ra Book not found');

            return redirect(route('raBooks.index'));
        }

        return view('ra_books.edit')->with('raBook', $raBook);
    }

    /**
     * Update the specified ra_book in storage.
     *
     * @param int $id
     * @param Updatera_bookRequest $request
     *
     * @return Response
     */
    public function update($id, Updatera_bookRequest $request)
    {
        $raBook = $this->raBookRepository->find($id);

        if (empty($raBook)) {
            Flash::error('Ra Book not found');

            return redirect(route('raBooks.index'));
        }

        $raBook = $this->raBookRepository->update($request->all(), $id);

        Flash::success('Ra Book updated successfully.');

        return redirect(route('raBooks.index'));
    }

    /**
     * Remove the specified ra_book from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raBook = $this->raBookRepository->find($id);

        if (empty($raBook)) {
            Flash::error('Ra Book not found');

            return redirect(route('raBooks.index'));
        }

        $this->raBookRepository->delete($id);

        Flash::success('Ra Book deleted successfully.');

        return redirect(route('raBooks.index'));
    }
}
