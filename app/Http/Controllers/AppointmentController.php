<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        //dd('Reached store method');

        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'car_brand' => 'required',
            'car_model' => 'required',
            'licence' => 'required',
            'service' => 'required',
            'appointment_date' => 'required|date_format:Y-m-d\TH:i',
        ]);

        // Parse the appointment date and convert it to a valid format for storing in the database
        $appointmentDate = Carbon::createFromFormat('Y-m-d\TH:i', $validatedData['appointment_date']);

        // Create a new appointment with the adjusted appointment date
        Appointment::create([
            'full_name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'car_brand' => $validatedData['car_brand'],
            'car_model' => $validatedData['car_model'],
            'licence' => $validatedData['licence'],
            'service' => $validatedData['service'],
            'appointment_date' => $appointmentDate,
        ]);
        // You can perform additional actions here, such as sending confirmation emails, notifications, etc.

        // Redirect the user to a thank you page
        return redirect()->route('thankyou');
    }
}

