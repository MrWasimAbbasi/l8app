<section class="content-header">
    <h1>
        {{$title}}
        <small>{{$sub_title}}</small>
    </h1>
    <ol class="breadcrumb">
        @foreach($items as $key => $item)
            @if($loop->last)
                <li class="active">{{$item}}</li>
            @else
                <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> {{$item}}</a></li>
            @endif
        @endforeach
    </ol>
</section>
