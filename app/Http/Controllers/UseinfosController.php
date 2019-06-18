<?php

namespace App\Http\Controllers;

use App\Models\Useinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UseinfoRequest;

class UseinfosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$useinfos = Useinfo::paginate();
		return view('useinfos.index', compact('useinfos'));
	}

    public function show(Useinfo $useinfo)
    {
        return view('useinfos.show', compact('useinfo'));
    }

	public function create(Useinfo $useinfo)
	{
		return view('useinfos.create_and_edit', compact('useinfo'));
	}

	public function store(UseinfoRequest $request)
	{
		$useinfo = Useinfo::create($request->all());
		return redirect()->route('useinfos.show', $useinfo->id)->with('message', 'Created successfully.');
	}

	public function edit(Useinfo $useinfo)
	{
        $this->authorize('update', $useinfo);
		return view('useinfos.create_and_edit', compact('useinfo'));
	}

	public function update(UseinfoRequest $request, Useinfo $useinfo)
	{
		$this->authorize('update', $useinfo);
		$useinfo->update($request->all());

		return redirect()->route('useinfos.show', $useinfo->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Useinfo $useinfo)
	{
		$this->authorize('destroy', $useinfo);
		$useinfo->delete();

		return redirect()->route('useinfos.index')->with('message', 'Deleted successfully.');
	}
}