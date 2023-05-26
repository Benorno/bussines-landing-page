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
