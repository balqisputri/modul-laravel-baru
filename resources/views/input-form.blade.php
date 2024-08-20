<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <form action="/input" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
