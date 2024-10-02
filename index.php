<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অ্যাপ মাইগ্রেশন টুল</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>অ্যাপ মাইগ্রেশন টুল</h1>
        <p>আপনার অ্যাপের জন্য প্রয়োজনীয় তথ্য পূরণ করুন এবং তৈরি করুন!</p>
        <form action="generate_presentation.php" method="POST">
            <label for="appName">অ্যাপের নাম:</label>
            <input type="text" id="appName" name="appName" required>

            <label for="appDescription">অ্যাপের বর্ণনা:</label>
            <textarea id="appDescription" name="appDescription" required></textarea>

            <label for="appFeatures">অ্যাপের ফিচার (কমা দিয়ে পৃথক করুন):</label>
            <input type="text" id="appFeatures" name="appFeatures" required>

            <button type="submit">প্রেজেন্টেশন তৈরি করুন</button>
        </form>
    </div>
</body>
</html>
