<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <h1>Howdy! User</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <!-- Replace <a> with a <button> to make it submit the form -->
        <button type="submit" class="dropdown-item w-100 text-left">
            <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> Sign Out
        </button>
    </form>

</body>

</html>
