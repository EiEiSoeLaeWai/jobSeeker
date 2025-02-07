<!-- resources/views/search-results.blade.php -->

<h1>Search Results for "{{ $query }}"</h1>

<h2>Jobs</h2>
@if ($jobs->isEmpty())
    <p>No job results found.</p>
@else
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job->title }} - {{ $job->description }}</li>
        @endforeach
    </ul>
@endif

<h2>Companies</h2>
@if ($companies->isEmpty())
    <p>No company results found.</p>
@else
    <ul>
        @foreach ($companies as $company)
            <li>{{ $company->name }} - {{ $company->description }}</li>
        @endforeach
    </ul>
@endif

