<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TODO List with Laravel</title>
    </head>
    <body>
	<h1>Add New Task</h1>
		<form method="POST" action="{{url('/add')}}">
			@csrf
			<textarea name="Task"></textarea>
			<input type="submit" />
		</form>
		<hr />
		<h1>Tasks</h1>
		<ul>
		@foreach ($tasks as $task)
			<li>{{{ $task["name"] }}} <a href="{{ url('/remove',$task['id']) }}">Remove</a>
		@endforeach
		</ul>
    </body>
</html>
