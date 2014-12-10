<?php
use Larabook\Tiposcultivo\Tipocultivo;

/**
 * @property mixed tipocultivoForm
 */
class TiposcultivoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tiposcultivos
	 *
	 * @return Response
	 */
	public function index()
	{
        $tiposdecultivo = Tipocultivo::all();
        return View::make('tiposcultivo.index')->withTiposdecultivo($tiposdecultivo);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /tiposcultivos/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('tiposcultivo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tiposcultivos
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->tipocultivoForm->validate(Input::all());

        $tipocultivo = $this->execute(RegisterTipocultivoCommand::class);



        Flash::message('Tipo de cultivo satisfactoriamente creado');

        return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /tiposcultivos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tiposcultivos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tiposcultivos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tiposcultivos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}