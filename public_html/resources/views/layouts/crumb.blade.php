@foreach($page['crumb'] as $crumb => $link)
<li class="breadcrumb-item text-sm text-dark active" ><a href="{{$link}}">{{$crumb}}</a></li>
@endforeach