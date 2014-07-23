<?php

use GhiSao\Repositories\Obra\ObraRepositoryInterface;
use GhiSao\Repositories\User\SaoUserRepositoryInterface;

class ObraController extends \BaseController {

    protected $obraRepository;
    protected $saoUserRepository;

    public function __construct(ObraRepositoryInterface $obraRepository, SaoUserRepositoryInterface $saoUserRepository)
    {
        $this->obraRepository = $obraRepository;
        $this->saoUserRepository = $saoUserRepository;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $obras = $this->saoUserRepository->getObras();

		return View::make('obras.list')->withObras($obras);
	}

    /**
     * Set the database source and obra into the session.
     *
     * @param  string  $db
     * @param  int  $id_obra
     * @return Response
     */
    public function selectObra($db, $id_obra)
    {
        Session::put('connection', $db);
        Session::put('id_obra', $id_obra);
        Session::put('is_obra_selected', true);

        return Redirect::intended();
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $conn
     * @param  int  $id
	 * @return Response
	 */
	public function show($conn, $id)
	{
        $obra = $this->obraRepository->findWithConnection($conn, $id);

		return View::make('obras.show')->withObra($obra);
	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}