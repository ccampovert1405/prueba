<?php

namespace App\Http\Controllers;

use App\Models\UsersBackoffice;
use Illuminate\Http\Request;

/**
 * Class UsersBackofficeController
 * @package App\Http\Controllers
 */
class UsersBackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersBackoffices = UsersBackoffice::paginate();

        return view('users-backoffice.index', compact('usersBackoffices'))
            ->with('i', (request()->input('page', 1) - 1) * $usersBackoffices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersBackoffices = new UsersBackoffice();
        return view('users-backoffice.create', compact('usersBackoffices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsersBackoffice::$rules);

        $usersBackoffice = UsersBackoffice::create($request->all());

        return redirect()->route('users-backoffices.index')
            ->with('success', 'UsersBackoffice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersBackoffice = UsersBackoffice::find($id);

        return view('users-backoffice.show', compact('usersBackoffice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        $usersBackoffice = UsersBackoffice::find($id);

        return response()->json(['user' => $usersBackoffice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersBackoffices = UsersBackoffice::find($id);

        return view('users-backoffice.edit', compact('usersBackoffices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsersBackoffice $usersBackoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersBackoffice $usersBackoffice)
    {
        request()->validate(UsersBackoffice::$rules);

        $usersBackoffice->update($request->all());

        return redirect()->route('users-backoffices.index')
            ->with('success', 'UsersBackoffice updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersBackoffice = UsersBackoffice::find($id)->delete();

        return redirect()->route('users-backoffices.index')
            ->with('success', 'UsersBackoffice deleted successfully');
    }
}
