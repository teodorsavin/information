<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Http\Requests\InformationFormRequest;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::all();

        return view('information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InformationFormRequest $request
     *
     * @return array
     */
    public function store(InformationFormRequest $request)
    {
        $slug = uniqid();
        $information = new Information([
            'first_name'         => $request->get('first_name'),
            'last_name'          => $request->get('last_name'),
            'bsn'                => $request->get('bsn'),
            'email'              => $request->get('email'),
            'phone'              => $request->get('phone'),
            'street'             => $request->get('street'),
            'house_number'       => $request->get('house_number'),
            'postal_code'        => $request->get('postal_code'),
            'city'               => $request->get('city'),
            'country'            => $request->get('country'),
            'IBAN'               => $request->get('iban'),
            'credit_card_number' => $request->get('credit_card_number'),
            'civ'                => $request->get('civ'),
            'slug'               => $slug
        ]);
        $information->save();

        return redirect('/information')->with('status', 'Your person has been created! Its unique id is: ' . $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $information = Information::whereSlug($slug)->firstOrFail();

        return view('information.show', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug)
    {
        $information = Information::whereSlug($slug)->firstOrFail();

        return view('information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  InformationFormRequest $request
     * @param  string                 $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function update($slug, InformationFormRequest $request)
    {
        $information = Information::whereSlug($slug)->firstOrFail();

        $information->first_name            = $request->get('first_name');
        $information->last_name             = $request->get('last_name');
        $information->bsn                   = $request->get('bsn');
        $information->email                 = $request->get('email');
        $information->phone                 = $request->get('phone');
        $information->street                = $request->get('street');
        $information->house_number          = $request->get('house_number');
        $information->postal_code           = $request->get('postal_code');
        $information->city                  = $request->get('city');
        $information->country               = $request->get('country');
        $information->IBAN                  = $request->get('iban');
        $information->credit_card_number    = $request->get('credit_card_number');
        $information->civ                   = $request->get('civ');

        $information->save();

        return redirect(
            action('InformationController@edit', $information->slug)
        )->with('status', 'The person with the unique id: ' . $slug . ' - has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $information = Information::whereSlug($slug)->firstOrFail();
        $information->delete();

        return redirect('/information')->with(
            'status',
            'The person with the unique id: ' . $slug . ' has been deleted from the system!'
        );
    }
}
