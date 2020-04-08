<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemigrationsRequest;
use App\Http\Requests\UpdatemigrationsRequest;
use App\Repositories\migrationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class migrationsController extends AppBaseController
{
    /** @var  migrationsRepository */
    private $migrationsRepository;

    public function __construct(migrationsRepository $migrationsRepo)
    {
        $this->migrationsRepository = $migrationsRepo;
    }

    /**
     * Display a listing of the migrations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $migrations = $this->migrationsRepository->paginate(10);

        return view('migrations.index')
            ->with('migrations', $migrations);
    }

    /**
     * Show the form for creating a new migrations.
     *
     * @return Response
     */
    public function create()
    {
        return view('migrations.create');
    }

    /**
     * Store a newly created migrations in storage.
     *
     * @param CreatemigrationsRequest $request
     *
     * @return Response
     */
    public function store(CreatemigrationsRequest $request)
    {
        $input = $request->all();

        $migrations = $this->migrationsRepository->create($input);

        Flash::success('Migrations saved successfully.');

        return redirect(route('migrations.index'));
    }

    /**
     * Display the specified migrations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $migrations = $this->migrationsRepository->find($id);

        if (empty($migrations)) {
            Flash::error('Migrations not found');

            return redirect(route('migrations.index'));
        }

        return view('migrations.show')->with('migrations', $migrations);
    }

    /**
     * Show the form for editing the specified migrations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $migrations = $this->migrationsRepository->find($id);

        if (empty($migrations)) {
            Flash::error('Migrations not found');

            return redirect(route('migrations.index'));
        }

        return view('migrations.edit')->with('migrations', $migrations);
    }

    /**
     * Update the specified migrations in storage.
     *
     * @param int $id
     * @param UpdatemigrationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemigrationsRequest $request)
    {
        $migrations = $this->migrationsRepository->find($id);

        if (empty($migrations)) {
            Flash::error('Migrations not found');

            return redirect(route('migrations.index'));
        }

        $migrations = $this->migrationsRepository->update($request->all(), $id);

        Flash::success('Migrations updated successfully.');

        return redirect(route('migrations.index'));
    }

    /**
     * Remove the specified migrations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $migrations = $this->migrationsRepository->find($id);

        if (empty($migrations)) {
            Flash::error('Migrations not found');

            return redirect(route('migrations.index'));
        }

        $this->migrationsRepository->delete($id);

        Flash::success('Migrations deleted successfully.');

        return redirect(route('migrations.index'));
    }
}
