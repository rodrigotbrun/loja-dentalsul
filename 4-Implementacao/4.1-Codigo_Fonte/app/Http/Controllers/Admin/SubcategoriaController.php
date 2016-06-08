<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateSubcategoriaRequest;
use App\Http\Requests\UpdateSubcategoriaRequest;
use App\Repositories\SubcategoriaRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubcategoriaController extends AppBaseController {
    /** @var  SubcategoriaRepository */
    private $subcategoriaRepository;

    public function __construct(SubcategoriaRepository $subcategoriaRepo) {
        $this->subcategoriaRepository = $subcategoriaRepo;
    }

    /**
     * Display a listing of the Subcategoria.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->subcategoriaRepository->pushCriteria(new RequestCriteria($request));
        $subcategorias = $this->subcategoriaRepository->all();

        return view('subcategorias.index')
            ->with('subcategorias', $subcategorias);
    }

    /**
     * Show the form for creating a new Subcategoria.
     *
     * @return Response
     */
    public function create() {
        return view('subcategorias.create');
    }

    /**
     * Store a newly created Subcategoria in storage.
     *
     * @param CreateSubcategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcategoriaRequest $request) {
        $input = $request->all();

        $subcategoria = $this->subcategoriaRepository->create($input);

        Flash::success('Subcategoria saved successfully.');

        return redirect(route('subcategorias.index'));
    }

    /**
     * Display the specified Subcategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $subcategoria = $this->subcategoriaRepository->findWithoutFail($id);

        if (empty($subcategoria)) {
            Flash::error('Subcategoria not found');

            return redirect(route('subcategorias.index'));
        }

        return view('subcategorias.show')->with('subcategoria', $subcategoria);
    }

    /**
     * Show the form for editing the specified Subcategoria.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $subcategoria = $this->subcategoriaRepository->findWithoutFail($id);

        if (empty($subcategoria)) {
            Flash::error('Subcategoria not found');

            return redirect(route('subcategorias.index'));
        }

        return view('subcategorias.edit')->with('subcategoria', $subcategoria);
    }

    /**
     * Update the specified Subcategoria in storage.
     *
     * @param  int $id
     * @param UpdateSubcategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcategoriaRequest $request) {
        $subcategoria = $this->subcategoriaRepository->findWithoutFail($id);

        if (empty($subcategoria)) {
            Flash::error('Subcategoria not found');

            return redirect(route('subcategorias.index'));
        }

        $subcategoria = $this->subcategoriaRepository->update($request->all(), $id);

        Flash::success('Subcategoria updated successfully.');

        return redirect(route('subcategorias.index'));
    }

    /**
     * Remove the specified Subcategoria from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $subcategoria = $this->subcategoriaRepository->findWithoutFail($id);

        if (empty($subcategoria)) {
            Flash::error('Subcategoria not found');

            return redirect(route('subcategorias.index'));
        }

        $this->subcategoriaRepository->delete($id);

        Flash::success('Subcategoria deleted successfully.');

        return redirect(route('subcategorias.index'));
    }
}
