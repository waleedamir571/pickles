<!DOCTYPE html>
<html>

<head>
    <title>Sitemap Update</title>
</head>

<body>

    <h2>Sitemap File Upload</h2>
    <form action="stupdate.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="newSitemap">Select new sitemap file:</label>
        <input type="file" name="newSitemap" id="newSitemap" accept=".xml">
        <br>
        <input type="submit" value="Upload">
    </form>

    <?php
    session_start();
    // Function to check user credentials
    function checkCredentials($username, $password)
    {
        $userFilePath = '/authweb/user/user.txt';
        if (file_exists($userFilePath)) {
            $lines = file($userFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                list($storedUsername, $storedPassword) = explode(',', $line);
                if ($username === $storedUsername && $password === $storedPassword) {
                    return true; // Credentials are valid
                }
            }
        }
        return false; // Invalid credentials
    }

    // Function to create log.txt file
    function createLogTxt($username)
    {
        $currentDate = date('Y-m-d');
        $logFolder = 'C:/xampp/htdocs/project/staging/hoi/main/authweb/logs/';
        $userLogFolder = $logFolder . $currentDate . '/'; // Create folder with only the date
    
        // Create the user-specific log folder if it doesn't exist
        if (!is_dir($userLogFolder)) {
            mkdir($userLogFolder, 0777, true);
        }
    
        $currentDateTime = date('Y-m-d_H-i-s');
        $logFilePath = $userLogFolder . $currentDateTime . '_' . $username . '_log.txt'; // Include username in the log file name
    
        return $logFilePath;
    }
    

    // Function to write log entry
    function writeLogEntry($logFilePath, $username)
    {
        $currentDateTime = date('Y-m-d H:i:s');
        $token = session_id();
        $sessionId = session_id();
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        $logEntry = "Date: $currentDateTime | Token: $token | Session ID: $sessionId | IP Address: $ipAddress | Username: $username" . PHP_EOL;

        // Append the log entry to the log.txt file
        file_put_contents($logFilePath, $logEntry, FILE_APPEND | LOCK_EX);
    }

    // Function to move old sitemap.xml with a timestamp
    function moveOldSitemap($username)
    {
        $oldSitemapFilePath = 'C:/xampp/htdocs/project/staging/hoi/main/sitemap.xml';
        $backupFolder = 'C:/xampp/htdocs/project/staging/hoi/main/authweb/sitemap_records/';
    
        if (file_exists($oldSitemapFilePath)) {
            $currentDate = date('Y-m-d');
            $userBackupFolder = $backupFolder . $currentDate . '/'; // Create folder with only the date
    
            // Create the user-specific backup folder if it doesn't exist
            if (!is_dir($userBackupFolder)) {
                mkdir($userBackupFolder, 0777, true);
            }
    
            $currentDateTime = date('Y-m-d_H-i-s');
            $backupFileName = 'sitemap_' . $currentDateTime . '_' . $username . '.xml'; // Include username in the file name
    
            // Move the old sitemap.xml to the user's backup folder with the timestamp and username
            rename($oldSitemapFilePath, $userBackupFolder . $backupFileName);
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the entered username and password are valid
        if (checkCredentials($username, $password)) {
            // Create log.txt file and get its path
            $logFilePath = createLogTxt($username);

            // Write log entry
            writeLogEntry($logFilePath, $username);

            // Move the old sitemap.xml to the user's backup folder
            moveOldSitemap($username);

            // Check if a file is uploaded
            if ($_FILES["newSitemap"]["error"] == UPLOAD_ERR_OK) {
                // Define the destination path for the new sitemap.xml file
                $newSitemapFilePath = 'C:/xampp/htdocs/project/staging/hoi/main/' . $_FILES["newSitemap"]["name"];

                // Move the uploaded file to the root folder with its original name
                if (move_uploaded_file($_FILES["newSitemap"]["tmp_name"], $newSitemapFilePath)) {

                    echo "<span>File uploaded successfully.</span>";
                } else {
                    echo "<h3>Failed to upload the file.</h3>";
                }
            } else {
                echo "<h3>File upload error.</h3>";
            }
        } else {
            echo "<h3>Invalid username or password.</h3>";
        }
    }
    ?>
</body>

</html>