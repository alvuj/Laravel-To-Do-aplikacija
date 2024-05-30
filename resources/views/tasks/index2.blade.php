@extends('layouts.app')
@section('content')
    

        <h1>To-do Lista</h1>
        <form action="{{ route('tasks.search') }}" method="GET">
            <input type="text" name="search" placeholder="Search Tasks">
            <button type="submit">Search</button>
        </form>
        {{-- search --}}
        @if (isset($results))
            @if ($results->isNotEmpty())
                <h2>Rezultati pretraživanja:</h2>
                <ul>
                    @foreach ($results as $result)
                        <li>{{ $result->description }}</li>
                    @endforeach
                </ul>
            @else
                <p>No results found.</p>
            @endif
        @endif
        {{-- prikaz koliko je gotovo --}}
       
        <div class="card" style="margin-bottom: 10px">
            <div class="column">
            <div class="card" style="margin-bottom: 10px">
                <p><i class="fa fa-user"></i></p>
                <h3>Broj gotovih projekta</h3>
                <p>Gotovo: {{$count}}</p>
              </div>
            </div>
            </div>

        {{--  --}}
        @foreach ($tasks as $task)
            <div class="card @if($task->completed_at != null && $task->completed_at != '') border-success @endif" style="margin-bottom: 10px">
                <div class="card-body">
                    
                   <h3> {{$task->name_of_task}}</h3>
                   <p> {{$task->description}}</p>



                   @if($task->completed_at != null && $task->completed_at != '')
                       <span class="badge bg-secondary bg-success">Gotov</span>
                   @endif
                   {{--  --}}
                 
                   {{--  --}}
                   @if(!$task->completed_at != null && !$task->completed_at != '')

                   <form action="/tasks/{{$task->id}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <button class="btn btn-light btn-lg btn-block" input="submit">Označi kao gotov</button>
                   </form>
                   @else
                   <form action="/tasks/{{$task->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-lg btn-block" input="submit">Izbriši</button>
                   @endif
                </div>
            </div>
        @endforeach
        <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Novi zadatak</a>
    </body>
</html>

@endsection