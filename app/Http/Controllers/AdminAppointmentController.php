<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.index', compact('appointments'));
    }

    public function search(Request $request)
    {
        $licence = $request->input('licence');

        // Perform the search query based on the licence plate
        if ($licence) {
            $appointments = Appointment::where('licence', $licence)->get();
            $message = $appointments->isEmpty() ? 'No appointment found.' : 'Appointments found.';
        } else {
            $appointments = Appointment::all();
            $message = null; // No search query, so no message is displayed
        }

        return view('admin.index', compact('appointments', 'message'));
    }


    public function markAsDone(Appointment $appointment)
    {
        $appointment->status = 'done';
        $appointment->save();
        return redirect()->route('admin.index')->with('success', 'Appointment marked as done.');
    }

    public function markAsCanceled(Appointment $appointment)
    {
        $appointment->status = 'canceled';
        $appointment->save();
        return redirect()->route('admin.index')->with('success', 'Appointment marked as canceled.');
    }

    public function markAsPending(Appointment $appointment)
    {
        $appointment->status = 'pending';
        $appointment->save();
        return redirect()->route('admin.index')->with('success', 'Appointment marked as pending.');
    }
}
