@if( isset($breadcrumbs) )
<div class="container">
	<ul class="breadcrumb">
	  @for($i = 0; $i < count($breadcrumbs); $i++)
		  @if( $i==count($breadcrumbs) - 1 )
		  	<li>{{$breadcrumbs[$i]->title}}</li>
		  @else
			@if( $i==0 )
			  	<li><a href="/category/{{$breadcrumbs[$i]->id}}">{{$breadcrumbs[$i]->title}}</a></li>
			@else
			  	<li><a href="/category/{{$breadcrumbs[0]->id}}/sub-category/{{$breadcrumbs[$i]->id}}">{{$breadcrumbs[$i]->title}}</a></li>
			@endif	
		  @endif
	  @endfor
	</ul>
</div>
@endif