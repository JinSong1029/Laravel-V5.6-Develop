@extends('layout.app')

@section('content')
    <h1>This is news index page</h1>
    <a href="{{ route('news.create') }}">Create</a>
    @if (count($news)>0)
	    <table class="table table-bordered">
	    	<thead>
	    		<th>Title</th>
	    		<th>Content</th>
	    	</thead>
	    	<tbody>
	    		@foreach ($news as $new)
	    			<tr>
	    				<td>
	    					{{$new->title}}
	    				</td>
	    				<td>
	    					{{$new->content}}
	    				</td>
	    			</tr>
	    		@endforeach
	    	</tbody>
	    </table>
	@endif
@endsection
