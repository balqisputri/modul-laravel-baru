<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
</head>
<body>
    <h1>Register Student</h1>
    <form id="studentForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <br>
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
        <br>
        <br>
        <button type="button" onclick="submitForm()">Register</button>
    </form>

    <script>
        function submitForm() {
            const form = document.getElementById('studentForm');
            const formData = {
                name: form.name.value,
                age: form.age.value,
                class: form.class.value
            };

            fetch('/student/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.errors) {
                    console.error(data.errors);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
