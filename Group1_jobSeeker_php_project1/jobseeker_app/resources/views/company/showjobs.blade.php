<table>
    <thead>
        <tr>
            <th>Job ID</th>
            <th>Job Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>