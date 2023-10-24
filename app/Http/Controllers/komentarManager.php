<?php

namespace App\Http\Controllers;

use App\Http\Requests\feedbackContact;
use App\Models\komentar;
use Illuminate\Http\Request;

class komentarManager extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("komentar.list-all",[ "posts" => komentar::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect(route("contact"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(feedbackContact $fb)
    {
        $valid = $fb->validate(feedbackContact::rules());

        $post = komentar::create($valid);

        return back()
            ->withInput($valid) // Mengembalikan data yang telah divalidasi kembali ke form
            ->with("success", "Success message here");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $koleksi = collect(komentar::all());
        $show = $koleksi->firstWhere("id",$id);
        return view("komentar.show",[ "data" => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $show = komentar::findOrFail($id);
        return view("komentar.edit",[ "data" => $show]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(feedbackContact $dafuk, string $id)
    {
        $dafuk->validate(feedbackContact::rules());

        $result = komentar::find($id)->update($dafuk->all());
        return redirect()->route("komentar.index")->with("success","update data success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
