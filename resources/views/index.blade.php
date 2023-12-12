<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>ToDo App</title>
</head>
<body>

<h1>Tasks</h1>

<ul>
    @foreach($tasks as $task)
        <li>
           
            <x-card>
                <x-slot name="header">
                    {{ $task->name }}
                </x-slot>
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </x-card>  
          
        </li>
    @endforeach
</ul>

<form method="POST" action="/tasks">
    @csrf
    <label for="name">New Task:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Add Task</button>
</form>

</body>
</html>
