<!-- resources/views/companies/search.blade.php -->

<form action="{{ route('companies.search') }}" method="GET">
    <input type="text" name="query" placeholder="Search companies...">
    <button type="submit">Search</button>
</form>
