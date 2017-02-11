@extends('layouts.master')
@section('content')
	<div>
	    <table id="tab">
			<thead>
				<tr>
					<th>Category ID</th>
					<th>Category Name</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
			</thead>
			<tbody>
			      @foreach ($cat as $cat)
				<tr>
	                <td>{!! $cat->category_id !!}</td>
	                <td>{!! $cat->category_name !!}</td>
	                <td> <a href="/editcategories/{!! $cat->category_id !!}/">edit</a></td>
	                <td> <a href="/deletecategories/{!! $cat->category_id !!}/">delete</a></td>
	            </tr>
	               @endforeach
						    
	        </tbody>
	    </table>
	    	<input type="hidden" value="{{ Session::token() }}" name="_token">
	</div>


@endsection