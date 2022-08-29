<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function getAllFeedbacks(): \Illuminate\Contracts\View\View
	{
		$feedbacks = Contact::orderBy('created_at', 'DESC')->get();

		return view('pages.feedbacks', ['feedbacks' => $feedbacks]);
	}

	public function storeContact(Request $request): \Illuminate\Http\RedirectResponse
	{
		Contact::create([
			'email' => $request->email,
			'message' => $request->message,
		]);

		return redirect()->back()->with('success', 'Contact added successful');
	}
}
