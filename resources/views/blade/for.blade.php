<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Loop Example</title>
</head>
<body>
    <div align="center">
        <h1>For Loop Example</h1>
        <p>Value of i:</p>
        @for ($i = 1; $i < 11; $i++)
            <p>{{ $i }}</p>
        @endfor
    </div>
</body>
</html>
