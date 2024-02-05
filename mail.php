if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $message = $_POST["message"];

    $to = "finlay.hermann@gmail.com";
    $subject = "WEBSITE: $fname $lname, $country";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}