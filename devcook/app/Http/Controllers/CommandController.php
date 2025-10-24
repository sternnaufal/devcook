<?php

namespace App\Http\Controllers;

use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
public function index(Request $request)
{
    $query = Command::query();

    // Filter kategori
    if ($request->has('category') && $request->category != '') {
        $query->where('category', $request->category);
    }

    // Search judul
    if ($request->has('search') && $request->search != '') {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    // Pagination, 9 per page
    $commands = $query->orderBy('id', 'desc')->paginate(9)->withQueryString();

    // Ambil semua kategori unik untuk filter dropdown
    $categories = Command::select('category')->distinct()->pluck('category');

    return view('commands.index', compact('commands', 'categories'));
}


    public function create()
    {
        return view('commands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'command_text' => 'required',
        ]);

        Command::create($request->all());
        return redirect()->route('commands.index')->with('success', 'Command berhasil ditambahkan!');
    }
}
