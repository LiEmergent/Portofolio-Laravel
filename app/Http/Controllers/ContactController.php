<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'subject.max' => 'Subjek maksimal 255 karakter.',
            'message.required' => 'Pesan wajib diisi.',
            'message.max' => 'Pesan maksimal 5000 karakter.',
        ]);

        try {
            ContactMessage::create($validated);
            Log::info('Pesan kontak baru dari: '.$validated['email']);

            return redirect()
                ->back()
                ->with('success', 'Terima kasih! Pesan Anda telah terkirim. Saya akan merespons dalam 1-2 hari kerja.');
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan pesan kontak: '.$e->getMessage());

            return redirect()
                ->back()
                ->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi.')
                ->withInput();
        }
    }
}
