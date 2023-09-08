<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <{{$defH1}}>{!! $meta->body_h1 !!}</{{$defH1}}>
                </div>
            </div>

            <div class="col-md-6">
                {{ Breadcrumbs::render($catid) }}
            </div>
        </div>
    </div>
</div>
