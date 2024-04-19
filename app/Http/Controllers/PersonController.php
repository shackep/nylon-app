<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $people = Person::all();

        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        // If ssn1, ssn2, and ssn3 are not integers of the correct count, return an error

        $person = new Person();
        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->email = $request->email;
        $person->NID = $request->ssn1 . $request->ssn2 . $request->ssn3;
        $person->last_four = $request->ssn3;
        $person->active = true;
        $person->save();

        return redirect()->route('people.index');
    }

    public function deactivate(Person $person)
    {
        $person->active = false;
        $person->save();

        return redirect()->route('people.index');
    }
    public function activate(Person $person)
    {
        $person->active = true;
        $person->save();

        return redirect()->route('people.index');
    }
}
