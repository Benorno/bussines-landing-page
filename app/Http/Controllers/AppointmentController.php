<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * @throws ValidationException
     */
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
            'appointment_date' => [
                'required',
                'date_format:Y-m-d\TH:i',
                function ($attribute, $value, $fail) {
                    $selectedDate = Carbon::createFromFormat('Y-m-d\TH:i', $value);

                    // Check if the selected day is Sunday
                    if ($selectedDate->isSunday()) {
                        $fail('Sunday is not a valid appointment day.');
                    }

                    // Check if the selected time is between 18:00 and 10:00
                    $startTime = Carbon::createFromTime(10, 00);
                    $endTime = Carbon::createFromTime(18, 00)->addDay(); // Add a day to handle the next day's time until 10:00

                    if ($selectedDate->between($startTime, $endTime)) {
                        $fail('Wrong date selected.');
                    }

                },
            ],
        ]);

        // Parse the appointment date and convert it to a valid format for storing in the database
        $appointmentDate = Carbon::createFromFormat('Y-m-d\TH:i', $validatedData['appointment_date']);

        // Check if the appointment date and time is in the past
        if ($appointmentDate->isPast()) {
            throw ValidationException::withMessages([
                'appointment_date' => 'The appointment date and time must be in the future.',
            ]);
        }

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

