@extends('admin.layouts.app')



@section('content')



    <x-breadcrumb-def :pageData="$pageData"/>
    <section class="div_data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 " >


                    <x-form-select-category
                        name="location_id"
                        label="{{__('admin/project.loction')}}"
                        :sendvalue="old('location_id')"
                        :required-span="true"
                        print-val-name="slug"
                        colrow="col-lg-3 "
                        :send-arr="$Categories"
                    />



                    @foreach($Categories as $Category)
                        <x-category-item :Category="$Category" />
                    @endforeach




{{--                    @foreach($Categories as $Categorie)--}}
{{--                        <div class="text-left" style="direction: ltr">--}}
{{--                            {{ $Categorie->slug }} {{$Categorie->id}}--}}
{{--                        </div>--}}

{{--                        @foreach($Categorie->children as $child )--}}
{{--                            <div class="text-left" style=" margin-left: 20px;">--}}
{{--                                {{ $child->slug }} {{$child->id}}--}}

{{--                                @foreach($child->children as $subchild )--}}
{{--                                    <div class="text-left" style=" margin-left: 20px;">--}}
{{--                                        {{ $subchild->slug }} {{$subchild->id}}--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}

{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        --}}
{{--                    @endforeach--}}

                </div>
            </div>
        </div>



    </section>
@endsection


