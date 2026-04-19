{{-- UI Mockup Placeholder Component --}}
{{-- Usage: @include('marketing.components.ui-mockup', ['type' => 'dashboard', 'label' => 'Panel Principal', 'dark' => false]) --}}
@props(['type' => 'dashboard', 'label' => 'CEO Online', 'dark' => false])

@php $type = $type ?? 'dashboard'; $label = $label ?? 'CEO Online'; $dark = $dark ?? false; @endphp

<div class="relative rounded-2xl overflow-hidden {{ $dark ? 'shadow-2xl shadow-primary/20 border border-slate-700' : 'shadow-xl border border-slate-200/60' }}">
    {{-- Window Chrome --}}
    <div class="flex items-center gap-1.5 px-4 py-2.5 {{ $dark ? 'bg-slate-800 border-b border-slate-700' : 'bg-slate-100 border-b border-slate-200' }}">
        <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
        <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
        <div class="w-2.5 h-2.5 rounded-full bg-green-400"></div>
        <span class="ml-3 text-xs {{ $dark ? 'text-slate-400' : 'text-slate-500' }} font-medium truncate">{{ $label }}</span>
    </div>

    {{-- Content --}}
    @if($type === 'dashboard')
    <div class="{{ $dark ? 'bg-slate-900' : 'bg-white' }} flex" style="aspect-ratio: 16/9;">
        {{-- Sidebar --}}
        <div class="w-14 lg:w-20 {{ $dark ? 'bg-slate-800 border-r border-slate-700' : 'bg-slate-800 border-r border-slate-700' }} p-2 lg:p-3 space-y-2 lg:space-y-3 shrink-0">
            <div class="w-full aspect-square bg-primary rounded-lg"></div>
            <div class="w-full h-2 bg-slate-600 rounded"></div>
            <div class="w-full h-2 bg-slate-700 rounded"></div>
            <div class="w-3/4 h-2 bg-primary/40 rounded"></div>
            <div class="w-full h-2 bg-slate-700 rounded"></div>
            <div class="w-full h-2 bg-slate-700 rounded"></div>
        </div>
        {{-- Main --}}
        <div class="flex-1 p-3 lg:p-5 space-y-3 lg:space-y-4 overflow-hidden">
            {{-- Top bar --}}
            <div class="flex gap-2 lg:gap-3">
                <div class="h-6 lg:h-8 flex-1 {{ $dark ? 'bg-slate-800' : 'bg-slate-100' }} rounded-lg"></div>
                <div class="h-6 lg:h-8 w-16 lg:w-24 bg-primary/20 rounded-lg"></div>
            </div>
            {{-- Stat cards --}}
            <div class="grid grid-cols-3 gap-2 lg:gap-3">
                <div class="p-2 lg:p-3 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-primary/5 border-primary/10' }} rounded-lg border">
                    <div class="h-2 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded mb-1.5"></div>
                    <div class="h-4 lg:h-5 w-8 bg-primary rounded"></div>
                </div>
                <div class="p-2 lg:p-3 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-success/5 border-success/10' }} rounded-lg border">
                    <div class="h-2 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded mb-1.5"></div>
                    <div class="h-4 lg:h-5 w-8 bg-success rounded"></div>
                </div>
                <div class="p-2 lg:p-3 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-warning/5 border-warning/10' }} rounded-lg border">
                    <div class="h-2 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded mb-1.5"></div>
                    <div class="h-4 lg:h-5 w-8 bg-warning rounded"></div>
                </div>
            </div>
            {{-- Chart --}}
            <div class="flex-1 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-slate-50 border-slate-100' }} rounded-lg border p-2 lg:p-3 min-h-[60px]">
                <div class="h-2 w-16 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded mb-2 lg:mb-3"></div>
                <div class="flex items-end gap-1 h-[calc(100%-1.5rem)]">
                    <div class="flex-1 bg-primary/20 rounded-t" style="height:55%"></div>
                    <div class="flex-1 bg-primary/30 rounded-t" style="height:75%"></div>
                    <div class="flex-1 bg-primary/40 rounded-t" style="height:40%"></div>
                    <div class="flex-1 bg-primary rounded-t" style="height:90%"></div>
                    <div class="flex-1 bg-primary/50 rounded-t" style="height:65%"></div>
                    <div class="flex-1 bg-primary/30 rounded-t" style="height:50%"></div>
                    <div class="flex-1 bg-primary/60 rounded-t" style="height:80%"></div>
                    <div class="flex-1 bg-primary/20 rounded-t" style="height:35%"></div>
                </div>
            </div>
        </div>
    </div>

    @elseif($type === 'mobile')
    <div class="{{ $dark ? 'bg-slate-900' : 'bg-slate-50' }} flex items-center justify-center py-6 lg:py-10" style="aspect-ratio: 16/9;">
        <div class="w-[140px] lg:w-[200px] {{ $dark ? 'bg-slate-800 border-slate-600' : 'bg-white border-slate-200' }} rounded-[1.5rem] border-2 p-3 lg:p-4 shadow-lg space-y-2 lg:space-y-3">
            {{-- Status bar --}}
            <div class="flex justify-between items-center">
                <div class="h-1.5 w-8 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                <div class="h-1.5 w-6 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
            </div>
            {{-- Header --}}
            <div class="text-center">
                <div class="h-2 w-16 mx-auto bg-primary rounded mb-1.5"></div>
                <div class="h-1.5 w-12 mx-auto {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
            </div>
            {{-- Balance card --}}
            <div class="bg-primary/10 rounded-xl p-2 lg:p-3 text-center">
                <div class="h-1.5 w-10 mx-auto {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded mb-1"></div>
                <div class="h-4 w-14 mx-auto bg-primary rounded-lg"></div>
            </div>
            {{-- List items --}}
            <div class="space-y-1.5">
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 bg-success/20 rounded shrink-0"></div>
                    <div class="h-1.5 flex-1 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 bg-warning/20 rounded shrink-0"></div>
                    <div class="h-1.5 flex-1 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-4 h-4 bg-danger/20 rounded shrink-0"></div>
                    <div class="h-1.5 flex-1 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                </div>
            </div>
            {{-- CTA Button --}}
            <div class="h-6 bg-primary rounded-lg"></div>
        </div>
    </div>

    @elseif($type === 'invoice')
    <div class="{{ $dark ? 'bg-slate-900' : 'bg-white' }} p-4 lg:p-6 flex gap-4 lg:gap-6" style="aspect-ratio: 16/9;">
        {{-- Invoice document --}}
        <div class="flex-1 {{ $dark ? 'bg-slate-800 border-slate-600' : 'bg-slate-50 border-slate-200' }} rounded-xl border p-3 lg:p-4 space-y-2 lg:space-y-3">
            <div class="flex justify-between items-center">
                <div class="h-3 w-16 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                <div class="h-3 w-10 bg-danger/30 rounded"></div>
            </div>
            <div class="border-t {{ $dark ? 'border-slate-700' : 'border-slate-200' }}"></div>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <div class="h-2 w-14 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                    <div class="h-2 w-20 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded"></div>
                </div>
                <div class="flex justify-between">
                    <div class="h-2 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                    <div class="h-2 w-16 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded"></div>
                </div>
                <div class="flex justify-between">
                    <div class="h-2 w-16 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded"></div>
                    <div class="h-2 w-12 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded"></div>
                </div>
                <div class="border-t {{ $dark ? 'border-slate-700' : 'border-slate-200' }}"></div>
                <div class="flex justify-between">
                    <div class="h-3 w-10 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded font-bold"></div>
                    <div class="h-3 w-14 bg-primary rounded"></div>
                </div>
            </div>
        </div>
        {{-- AI extraction results --}}
        <div class="flex-1 space-y-2 lg:space-y-3">
            <div class="flex items-center gap-2 mb-2">
                <div class="w-5 h-5 bg-primary/20 rounded-lg flex items-center justify-center">
                    <svg class="w-3 h-3 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <div class="h-2 w-16 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded"></div>
            </div>
            @foreach(['Proveedor', 'CUIT', 'Monto', 'Fecha'] as $field)
            <div class="{{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-success/5 border-success/20' }} rounded-lg border p-2 flex items-center gap-2">
                <svg class="w-3 h-3 text-success shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                <div class="h-1.5 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                <div class="h-1.5 flex-1 {{ $dark ? 'bg-slate-500' : 'bg-slate-400' }} rounded"></div>
            </div>
            @endforeach
        </div>
    </div>

    @elseif($type === 'table')
    <div class="{{ $dark ? 'bg-slate-900' : 'bg-white' }} p-3 lg:p-5" style="aspect-ratio: 16/9;">
        {{-- Search bar --}}
        <div class="flex gap-2 lg:gap-3 mb-3 lg:mb-4">
            <div class="h-6 lg:h-8 flex-1 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-slate-50 border-slate-200' }} rounded-lg border"></div>
            <div class="h-6 lg:h-8 w-16 lg:w-20 bg-primary rounded-lg"></div>
        </div>
        {{-- Table header --}}
        <div class="grid grid-cols-5 gap-2 mb-2 px-2">
            @for($i = 0; $i < 5; $i++)
            <div class="h-2 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
            @endfor
        </div>
        <div class="border-b {{ $dark ? 'border-slate-700' : 'border-slate-200' }} mb-2"></div>
        {{-- Table rows --}}
        @for($r = 0; $r < 5; $r++)
        <div class="grid grid-cols-5 gap-2 px-2 py-1.5 {{ $r % 2 === 0 ? ($dark ? 'bg-slate-800/50' : 'bg-slate-50/50') : '' }} rounded">
            <div class="h-2 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded" style="width: {{ rand(60,100) }}%"></div>
            <div class="h-2 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded" style="width: {{ rand(50,90) }}%"></div>
            <div class="h-2 {{ $r < 3 ? 'bg-success/40' : ($dark ? 'bg-slate-600' : 'bg-slate-200') }} rounded" style="width: {{ rand(40,80) }}%"></div>
            <div class="h-2 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded" style="width: {{ rand(50,100) }}%"></div>
            <div class="h-2 {{ $dark ? 'bg-slate-500' : 'bg-primary/30' }} rounded" style="width: {{ rand(30,70) }}%"></div>
        </div>
        @endfor
    </div>

    @elseif($type === 'chat')
    <div class="{{ $dark ? 'bg-slate-900' : 'bg-white' }} flex flex-col" style="aspect-ratio: 16/9;">
        {{-- Chat header --}}
        <div class="px-3 lg:px-4 py-2 {{ $dark ? 'border-b border-slate-700' : 'border-b border-slate-200' }} flex items-center gap-2">
            <div class="w-6 h-6 bg-primary rounded-full"></div>
            <div>
                <div class="h-2 w-16 {{ $dark ? 'bg-slate-500' : 'bg-slate-300' }} rounded"></div>
                <div class="h-1.5 w-10 {{ $dark ? 'bg-slate-600' : 'bg-slate-200' }} rounded mt-1"></div>
            </div>
        </div>
        {{-- Messages --}}
        <div class="flex-1 p-3 lg:p-4 space-y-2 lg:space-y-3 overflow-hidden">
            {{-- Received --}}
            <div class="flex gap-2 items-end max-w-[70%]">
                <div class="w-5 h-5 bg-slate-300 rounded-full shrink-0"></div>
                <div class="{{ $dark ? 'bg-slate-800' : 'bg-slate-100' }} rounded-2xl rounded-bl-sm px-3 py-2 space-y-1">
                    <div class="h-1.5 w-24 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                    <div class="h-1.5 w-16 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                </div>
            </div>
            {{-- Sent --}}
            <div class="flex justify-end">
                <div class="bg-primary/90 rounded-2xl rounded-br-sm px-3 py-2 max-w-[65%] space-y-1">
                    <div class="h-1.5 w-20 bg-white/40 rounded"></div>
                    <div class="h-1.5 w-14 bg-white/40 rounded"></div>
                </div>
            </div>
            {{-- Received --}}
            <div class="flex gap-2 items-end max-w-[70%]">
                <div class="w-5 h-5 bg-slate-300 rounded-full shrink-0"></div>
                <div class="{{ $dark ? 'bg-slate-800' : 'bg-slate-100' }} rounded-2xl rounded-bl-sm px-3 py-2 space-y-1">
                    <div class="h-1.5 w-28 {{ $dark ? 'bg-slate-600' : 'bg-slate-300' }} rounded"></div>
                </div>
            </div>
        </div>
        {{-- Input --}}
        <div class="px-3 py-2 {{ $dark ? 'border-t border-slate-700' : 'border-t border-slate-200' }} flex gap-2">
            <div class="h-6 flex-1 {{ $dark ? 'bg-slate-800 border-slate-700' : 'bg-slate-50 border-slate-200' }} rounded-full border"></div>
            <div class="w-6 h-6 bg-primary rounded-full"></div>
        </div>
    </div>
    @endif
</div>
