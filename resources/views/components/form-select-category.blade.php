<div class="{{$colrow}}">
    <div class="form-group">
        <label class="def_form_label col-form-label font-weight-light">
            {{$label}}
            @if($requiredSpan)
                <span class="required_Span">*</span>
            @endif
        </label>

        <select class="form-control select2 custom-select is-invalid " id="{{$name}}" name="{{$name}}" style="width: 100%;" >
            <option value="0"  @if ( $sendvalue == '0' or $sendvalue == null ) selected @endif >مجموعة رائيسية</option>

{{--            @foreach ($sendArr as  $key => $value)--}}
{{--                <option value="{{ $value['id'] }}" @if ($value['id'] == $sendvalue) selected @endif>{{ $value[$printValName] }}</option>--}}
{{--              --}}
{{--              --}}
{{--              --}}
{{--                @foreach ($value->children as  $key_child => $value_child)--}}
{{--                    <option value="{{ $value_child['id'] }}" @if ($value_child['id'] == $sendvalue) selected @endif>-- {{ $value_child[$printValName] }}</option>--}}
{{--                @endforeach--}}

{{--            @endforeach--}}


            @foreach ($sendArr as  $category)
                <option value="{{ $category->id }}" @if ($category->id == $sendvalue) selected @endif>{{ $category->$printValName }}</option>

                @if (count($category->children) > 0)
                    @include('subcategories', ['subcategories' => $category->children, 'parent' => $category->name])
                @endif


{{--                @foreach ($value->children as  $key_child => $value_child)--}}
{{--                    <option value="{{ $value_child['id'] }}" @if ($value_child['id'] == $sendvalue) selected @endif>-- {{ $value_child[$printValName] }}</option>--}}
{{--                @endforeach--}}

            @endforeach


       </select>
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
        </span>
        @enderror
    </div>

</div>
