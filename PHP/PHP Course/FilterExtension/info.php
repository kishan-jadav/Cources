<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters</title>
    <h3>PHP Filter</h3>
    <p>used to validate and sanitize insecure external input.</p>
    <p>Two types of filter</p>
    <p><strong>Validating data: </strong>Checks if the data is in proper form (ex. valid email formate, URL, integer. etc.), data invalid hoy to false return kare.</p>
    <p><strong>Sanitizing data: </strong>Remove any illegal character from the data.</p>

    <pre>
        In PHP, there are two types of filters:

Validation filters: These filters will check if the data meets specific criteria, but do not change the data itself. It will return false if data is invalid.

Examples of validation filters:

FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_URL
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
Sanitization filters: These filters will remove illegal characters from the data, and may alter the input.

Examples of sanitization filters:

FILTER_SANITIZE_EMAIL (removes illegal email characters)
FILTER_SANITIZE_URL (removes illegal URL characters)
FILTER_SANITIZE_NUMBER_INT (removes all characters except digits and + - signs)
    </pre>
</head>
<body>
    <div>

    </div>
</body>
</html>