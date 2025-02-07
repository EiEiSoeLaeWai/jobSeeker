<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your Application</title>
</head>
<body>

    <header>
        <!-- Include the search form -->
        @include('companies.search')

        <!-- Other header content -->
        <!-- Navigation, user authentication status, etc. -->
    </header>

    <main>
        <!-- Content specific to each view -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

</body>
</html>
