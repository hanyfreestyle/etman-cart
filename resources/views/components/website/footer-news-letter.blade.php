@if($viewStauts)
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="newsletter_text text_white">
                        <h3>{{__('web/newsletter.title')}}</h3>
                        <p> {{__('web/newsletter.text')}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form2">
                        <form>
                            <input type="text" required="" class="form-control rounded-0" placeholder="{{__('web/newsletter.email')}}">
                            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">{{__('web/newsletter.Subscribe')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
