<div class="{{$col}}">
    <div class="form-group">
        <label>
            {{$label}}
            @if($reqspan)
                <span class="required_Span">*</span>
            @endif
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
            </div>
            <input type="text" id="{{$inputId}}" value="{{$value}}"  name="{{$name}}" class="form-control float-right DatePicker  @error($name) is-invalid @enderror" >

            @error($name)
            <span class="invalid-feedback" role="alert">
            <strong>{{ \App\Helpers\AdminHelper::error($message,$name,$label) }}</strong>
            </span>
            @enderror

        </div>
    </div>
</div>
