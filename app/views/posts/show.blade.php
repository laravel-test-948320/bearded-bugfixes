@extends('layouts.scaffold')

@section('main')

<h1>Show Post</h1>

<p>{{ link_to_route('posts.index', 'Return to all posts') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Author</th>
				<th>Body</th>
				<th>Title</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $post->author }}}</td>
					<td>{{{ $post->body }}}</td>
					<td>{{{ $post->title }}}</td>
                    <td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop