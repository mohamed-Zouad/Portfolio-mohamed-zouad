<!-- <?php
header('Content-Type: application/json');

// Terima data JSON
$data = json_decode(file_get_contents('php://input'), true);

// Validasi input
if (!isset($data['name']) || !isset($data['email']) || !isset($data['subject']) || !isset($data['message'])) {
    echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
    exit;
}

// Sanitasi input
$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($data['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($data['message'], FILTER_SANITIZE_STRING);

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Email tidak valid']);
    exit;
}

// Email tujuan (ganti dengan email Anda)
$to = "tamzidan01@gmail.com"; // Ganti dengan email Anda

// Persiapkan pesan email
$email_content = "Nama: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Pesan:\n$message";

// Header email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Kirim email
if (mail($to, $subject, $email_content, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal mengirim email']);
}
?> -->






<?php
// Définir le type de contenu comme JSON
header('Content-Type: application/json');

// Recevoir les données JSON
$data = json_decode(file_get_contents('php://input'), true);

// Valider les entrées
if (!isset($data['name']) || !isset($data['email']) || !isset($data['subject']) || !isset($data['message'])) {
    echo json_encode(['success' => false, 'message' => 'Tous les champs doivent être remplis']);
    exit;
}

// Nettoyer les entrées
$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($data['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($data['message'], FILTER_SANITIZE_STRING);

// Valider l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'L\'email n\'est pas valide']);
    exit;
}

// Email de destination (remplacez par votre email)
$to = "zouad1917@gmail.com"; // Remplacez par votre email

// Préparer le contenu de l'email
$email_content = "Nom: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Sujet: $subject\n";
$email_content .= "Message:\n$message";

// En-têtes de l'email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envoyer l'email
if (mail($to, $subject, $email_content, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès']);
} else {
    echo json_encode(['success' => false, 'message' => 'Échec de l\'envoi du message']);
}
?>