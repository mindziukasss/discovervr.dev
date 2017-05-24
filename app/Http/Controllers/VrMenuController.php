<?php 
namespace App\Http\Controllers;

use App\Models\VrMenu;
use Illuminate\Routing\Controller;

class VrMenuController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /vrmenu
	 *
	 * @return Response
	 */
	public function index()
	{
		$config['menu'] = VrMenu::get()->toArray();

		return view('admin.menu.index', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vrmenu/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$config['menu'] = VrMenu::all();
		$config['route'] = 'app.menu.create';

		return view('admin.menu.create', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vrmenu
	 *
	 * @return Response
	 */
	public function store()
	{
		$config['menu'] = VrMenu::all();
		$data = request()->all();

		VrMenu::create(array(
		'name' => $data['name'],
		'url' => $data['url'],
		'sequence' => $data['sequence'],
		));

		return redirect()->route('app.menu.index', $config);

	}

	/**
	 * Display the specified resource.
	 * GET /vrmenu/{id}
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
	 * GET /vrmenu/{id}/edit
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
	 * PUT /vrmenu/{id}
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
	 * DELETE /vrmenu/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}