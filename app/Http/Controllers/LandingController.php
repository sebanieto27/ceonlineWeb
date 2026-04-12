<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $testimonials = \App\Models\Testimonial::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('marketing.home', compact('testimonials'));
    }

    public function features()
    {
        return view('marketing.features');
    }

    public function blogIndex()
    {
        $posts = \App\Models\Post::with('category')
                                 ->where('is_published', true)
                                 ->latest('published_at')
                                 ->paginate(9);
        return view('marketing.blog.index', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = \App\Models\Post::with('category')
                                ->where('slug', $slug)
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

        \App\Models\Lead::create([
            'name'             => $validated['name'],
            'email'            => $validated['email'],
            'phone'            => $validated['phone'],
            'company'          => $validated['company'],
            'units'            => $validated['units'],
            'message'          => $validated['message'] ?? null,
            'source'           => 'demo_form',
            'status'           => 'new',
            'utm_source'       => $request->input('utm_source') ?: session('utm_source'),
            'utm_medium'       => $request->input('utm_medium') ?: session('utm_medium'),
            'utm_campaign'     => $request->input('utm_campaign') ?: session('utm_campaign'),
            'utm_content'      => $request->input('utm_content') ?: session('utm_content'),
            'first_contact_at' => now(),
        ]);

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

        \App\Models\Lead::create([
            'name'             => $validated['name'],
            'email'            => $validated['email'],
            'subject'          => $validated['subject'],
            'message'          => $validated['message'],
            'source'           => 'contact_form',
            'status'           => 'new',
            'utm_source'       => $request->input('utm_source') ?: session('utm_source'),
            'utm_medium'       => $request->input('utm_medium') ?: session('utm_medium'),
            'utm_campaign'     => $request->input('utm_campaign') ?: session('utm_campaign'),
            'utm_content'      => $request->input('utm_content') ?: session('utm_content'),
            'first_contact_at' => now(),
        ]);

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

        \App\Models\NewsletterSubscriber::firstOrCreate(
            ['email' => $validated['email']],
            [
                'status'        => 'active',
                'source'        => $request->header('Referer', 'web'),
                'subscribed_at' => now(),
            ]
        );

        if ($request->wantsJson()) {
            return response()->json(['message' => '¡Suscripción exitosa!']);
        }

        return back()->with('success', '¡Suscripción exitosa! Te mantendremos informado.');
    }

    public function trialLanding()
    {
        return view('marketing.trial');
    }

    public function privacy()
    {
        return view('marketing.privacy');
    }

    public function terms()
    {
        return view('marketing.terms');
    }

    public function bioLinks()
    {
        $links = \App\Models\BioLink::active()->get();
        return view('marketing.bio-links', compact('links'));
    }

    public function sitemap()
    {
        $posts = \App\Models\Post::where('is_published', true)->latest('published_at')->get();

        $urls = collect([
            ['loc' => route('home'),      'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => route('features'),  'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => route('solutions'), 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => route('pricing'),   'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => route('demo'),      'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('contact'),   'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('trial'),     'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('blog.index'),'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => route('privacy'),   'priority' => '0.3', 'changefreq' => 'yearly'],
            ['loc' => route('terms'),     'priority' => '0.3', 'changefreq' => 'yearly'],
        ]);

        foreach ($posts as $post) {
            $urls->push([
                'loc'        => route('blog.show', $post->slug),
                'lastmod'    => $post->updated_at->toW3cString(),
                'priority'   => '0.7',
                'changefreq' => 'monthly',
            ]);
        }

        return response()->view('marketing.sitemap', ['urls' => $urls])
                         ->header('Content-Type', 'application/xml');
    }
}
