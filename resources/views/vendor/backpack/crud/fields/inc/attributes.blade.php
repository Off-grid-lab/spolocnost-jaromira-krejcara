@php
    $field['attributes'] = $field['attributes'] ?? [];
    $field['attributes']['class'] = $field['attributes']['class'] ?? $default_class ?? 'form-control';
    $field['attributes']['rows'] = $field['attributes']['rows'] ?? 15;
@endphp

@foreach ($field['attributes'] as $attribute => $value)
	@if (is_string($attribute))
    {{ $attribute }}="{{ $value }}"
    @endif
@endforeach