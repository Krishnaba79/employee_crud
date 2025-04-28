<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form method="post" action="/employee/update/<?= $employee['id'] ?>">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?= $employee['first_name'] ?>" required>
        <br>
        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?= $employee['last_name'] ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
