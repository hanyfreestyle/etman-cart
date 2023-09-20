<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ defWebAssets('bootstrap/css/bootstrap.min_ar.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('test.css') }}">
</head>
<body>
{{--@foreach($categories as $category)--}}
{{--    <li>{{$category->name}} {{$category->children_shop_count}}  </li>--}}
{{--    @if($category->category_with_product_shop_count > 0)--}}
{{--        @foreach($category->category_with_product_shop as $product)--}}
{{--            <li class="ProLi">{{$product->name}}</li>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    @if($category->children_shop_count > 0 )--}}
{{--        @foreach($category->children_shop as $sub_cat)--}}
{{--            <li class="hany_r" >{{$sub_cat->name}} {{$sub_cat->children_shop_count}} </li>--}}

{{--                @if($sub_cat->category_with_product_shop_count > 0)--}}
{{--                    @foreach($sub_cat->category_with_product_shop as $product)--}}
{{--                        <li class="ProLi">{{$product->name}}</li>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

{{--        @endforeach--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--@foreach($categories as $category)--}}
{{--    <li>{{$category->name}} {{$category->id}}</li>--}}

{{--            @foreach($category->recursive_product_shop as $product)--}}
{{--                <li class="ProLi">{{$product->name}} {{$product->id}}</li>--}}
{{--            @endforeach--}}


{{--@endforeach--}}


@foreach($categories as $category)
    <li>{{$category->name}} </li>
    {{($category->products_count)}}

    <hr>
        @foreach($category->recursive_product_shop as $product)
            <li class="ProLi">{{$product->name}}</li>
        @endforeach


{{--    @foreach($category->category_with_product_shop as $product)--}}
{{--        <li class="ProLi">{{$product->name}}</li>--}}
{{--    @endforeach--}}


@endforeach

</body>
</html>

