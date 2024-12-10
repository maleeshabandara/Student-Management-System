<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment ;
use App\Models\student ;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class paymentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment ::all();
        return view ('payments.index')->with('payments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students= student::pluck('student_id','student_id');
        return view('payments.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payments Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $payments =Payment::find($id);
        return view('payments.show')->with('payments',$payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $payments = Payment::find($id);
        $students= Student::pluck('student_id','id'); 
        return view('payments.edit',compact('payments','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $payments = Payment:: find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'Payment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        payment::destroy($id);
        return redirect('payments')->with('flash_message','Payment deleted!');
    }
}
