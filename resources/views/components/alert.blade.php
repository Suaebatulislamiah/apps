
@props(['type' => 'info', 'message' => ''])

@php
    $colors = [
        'success' => ['bg' => '#d1e7dd', 'border' => '#0f5132', 'text' => '#0f5132', 'icon' => '✔️'],
        'danger'  => ['bg' => '#f8d7da', 'border' => '#842029', 'text' => '#842029', 'icon' => '❌'],
        'warning' => ['bg' => '#fff3cd', 'border' => '#664d03', 'text' => '#664d03', 'icon' => '⚠️'],
        'info'    => ['bg' => '#cff4fc', 'border' => '#055160', 'text' => '#055160', 'icon' => 'ℹ️'],
    ];
    $style = $colors[$type] ?? $colors['info'];
@endphp

<div style="background: {{ $style['bg'] }}; border-left: 6px solid {{ $style['border'] }}; color: {{ $style['text'] }}; border-radius: 5px; padding: 10px 15px; margin-bottom: 15px; display: flex; align-items: center;">
    <span style="font-size: 1.2em; margin-right: 8px;">{{ $style['icon'] }}</span>
    <span>{{ $message }}</span>
</div>