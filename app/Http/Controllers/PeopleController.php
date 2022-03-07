<?php

namespace App\Http\Controllers;

use App\Models\people;

use Illuminate\Http\Request;

class peopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['people'] = people::orderBy('id','asc')->paginate(5);
        return view('people.index', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'Dob' => 'required',
            'age' => 'required',
            'description' => 'required',
            ]);

            $people = new people;
            $people->name = $request->name;
            $people->email = $request->email;
            $people->phone_no = $request->phone_no;
            $people->Dob = $request->Dob;
            $people->age = $request->age;
            $people->description = $request->description;
            $people->hobby = $request->hobby;
            $people->gender = $request->gender;
            $people->hobby = $request->hobby;
            $people->save();
            return redirect()->route('people.index')->with('Bravo!','Data of the people has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */

    public function show(people $people, $id)
    {
        $people = people::find($id);
        return view('people.show',compact('people'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people, $id)
    {
        $people = people::find($id);
        return view('people.edit',compact('people'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'age' => 'required',
            //'gender' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            //'hobby' => 'required',
            'description' => 'required',
        ]);

        $people = people::find($id);
        $people->name = $request->name;
        $people->dob = $request->dob;
        $people->age = $request->age;
        $people->gender = $request->gender;
        $people->phoneNo = $request->phoneNo;
        $people->email = $request->email;
        $people->hobby = $request->hobby;
        $people->description = $request->description;
        $people->save();
        return redirect()->route('people.index')->with('Bravo','People data has been updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people, $id)
    {
        $post = people::find($id);

        $post->delete();
        return redirect()->route('people.index')->with('Bravo!','Data of people has been deleted successfully');
    }
}
