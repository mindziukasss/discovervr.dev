<?php namespace App\Http\Controllers;

use App\Models\VrLanguageCodes;
use App\Models\VrMenu;
use App\Models\VrMenuTranslations;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /frontend
	 *
	 * @return Response
	 */
	public function index()
    {
        $config['languages'] = VrLanguageCodes::select('language_code')->get()->toArray();
        $dataFromModel = new VrMenu;
        $config['tableName'] = $dataFromModel->getTableName();
        $config['list'] = $dataFromModel->where('vr_parent_id', null)->with(['subCategory', 'translation'])->get()->toArray();

        return view('frontEnd.home', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /frontend/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /frontend
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /frontend/{id}
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
	 * GET /frontend/{id}/edit
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
	 * PUT /frontend/{id}
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
	 * DELETE /frontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}