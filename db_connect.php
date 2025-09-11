
<?php
try {
    // Get DATABASE_URL from environment (Render provides this)
    $dbUrl = getenv("DATABASE_URL");
    if (!$dbUrl) {
        throw new Exception("DATABASE_URL not set in environment.");
    }

    // Parse DATABASE_URL
    $db = parse_url($dbUrl);

    $host = $db['host'];
    $port = $db['port'];
    $dbname = ltrim($db['path'], '/');
    $user = $db['user'];
    $password = $db['pass'];

    // Connect with PDO
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
