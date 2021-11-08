@include('crud::fields.inc.wrapper_start')
    <label>{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    <x-media-library-collection
        name="{{ $field['name'] }}"
        rules="{{ $field['rules'] ?? '' }}"
        :model="$entry ?? $crud->model"
        collection="{{ $field['name'] }}" />

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif

    @if ($crud->checkIfFieldIsFirstOfItsType($field))
        <livewire:styles />
        <livewire:scripts />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>
    @endif
@include('crud::fields.inc.wrapper_end')