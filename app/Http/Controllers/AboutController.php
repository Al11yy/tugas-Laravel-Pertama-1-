<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswa = [
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
             ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rahmad', 'kelas' => 'XI RPL 3'],
           
        ];

        return view('about',
         ['title' => 'About-Laravel',], compact('siswa') 

        );
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
