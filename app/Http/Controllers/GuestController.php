<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

/**
 * Class GuestController
 * @package App\Http\Controllers
 */
class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::paginate();

        return view('guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guest = new Guest();
        return view('guest.create', compact('guest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Guest::$rules);

        $guest = Guest::create($request->all());

        return redirect()->route('guests.index')
            ->with('success', 'Guest created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guest = Guest::find($id);

        return view('guest.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guest::find($id);

        return view('guest.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Guest $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        request()->validate(Guest::$rules);

        $guest->update($request->all());

        return redirect()->route('guests.index')
            ->with('success', 'Guest updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $guest = Guest::find($id)->delete();

        return redirect()->route('guests.index')
            ->with('success', 'Guest deleted successfully');
    }

    public function searchByName(Request $request)
    {
        $search = $request->search;
        $guests = Guest::where('name', 'like', "%$search%")->get();
        $data = [
            'name' => $guests
        ];
        return view('guest.index', compact('guests'));
    }

    public function filterByBirthdate(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        $guests = Guest::whereBetween('birthday', [$from, $to])->get();

        return view('guest.index', compact('guests'));
    }

    
}
