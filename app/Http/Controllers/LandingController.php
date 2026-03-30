<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('marketing.home');
    }

    public function features()
    {
        return view('marketing.features');
    }

    public function blogIndex()
    {
        $posts = \App\Models\Post::where('is_published', true)
                                 ->latest('published_at')
                                 ->paginate(9);
        return view('marketing.blog.index', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = \App\Models\Post::where('slug', $slug)
                                ->where('is_published', true)
                                ->firstOrFail();
        return view('marketing.blog.show', compact('post'));
    }

    public function solutions()
    {
        return view('marketing.solutions');
    }

    public function pricing()
    {
        return view('marketing.pricing');
    }

    public function demo()
    {
        return view('marketing.demo');
    }

    public function contact()
    {
        return view('marketing.contact');
    }

    public function submitDemo(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'company' => 'required|string|max:255',
            'units'   => 'required|in:1-50,51-100,101-500,500+',
            'message' => 'nullable|string|max:2000',
        ], [
            'name.required'    => 'El nombre es obligatorio.',
            'email.required'   => 'El email es obligatorio.',
            'email.email'      => 'Ingresá un email válido.',
            'phone.required'   => 'El teléfono es obligatorio.',
            'company.required' => 'El nombre de la administración es obligatorio.',
            'units.required'   => 'Seleccioná la cantidad de unidades.',
            'units.in'         => 'Seleccioná una opción válida.',
        ]);

        // TODO: Store in database or send email notification
        // For now, flash success and redirect

        return redirect()->route('demo')->with('success', '¡Gracias! Tu solicitud de demo fue enviada correctamente. Nos pondremos en contacto en menos de 24hs.');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|in:ventas,soporte,partnership,otro',
            'message' => 'required|string|max:5000',
        ], [
            'name.required'    => 'El nombre es obligatorio.',
            'email.required'   => 'El email es obligatorio.',
            'email.email'      => 'Ingresá un email válido.',
            'subject.required' => 'Seleccioná un asunto.',
            'message.required' => 'El mensaje es obligatorio.',
        ]);

        // TODO: Store in database or send email notification

        return redirect()->route('contact')->with('success', '¡Mensaje enviado! Te responderemos lo antes posible.');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'El email es obligatorio.',
            'email.email'    => 'Ingresá un email válido.',
        ]);

        // TODO: Add to newsletter list

        return back()->with('success', '¡Suscripción exitosa! Te mantendremos informado.');
    }
}
