@foreach ($subcategories as $sub)

    @if($sub->is_active == true and $sub->cat_shop == true )
        <option value="{{ $sub->id }}" >{{ $parent}} > {{ $sub->name }}</option>
        @if (count($sub->children) > 0 )
            @php
                $parents = $parent . ' > ' . $sub->name;
            @endphp
            @include('admin.form_loop.subcategories_livewire', ['subcategories' => $sub->children, 'parent' => $parents])
        @endif
    @endif

@endforeach
