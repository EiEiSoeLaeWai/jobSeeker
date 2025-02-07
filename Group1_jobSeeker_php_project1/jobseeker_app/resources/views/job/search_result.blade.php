<!-- resources/views/jobs/search-results.blade.php -->
<form action="{{ route('jobs.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search companies...">
    <button type="submit">Search</button>
</form>
<h1>Search Results for "{{ $query }}"</h1>

@if ($jobs->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job->title }} - {{ $job->description }}</li>
        @endforeach
    </ul>
@endif
