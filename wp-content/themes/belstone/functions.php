<?php
add_theme_support('post-thumbnails');

function send_email() {
	// Only process POST requests.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get the form fields and remove whitespace.
		$name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
		$tel = trim($_POST["tel"]);
		$sucursal = trim($_POST["sucursal"]);
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$message = trim($_POST["msg"]);


		// Check that data was sent to the mailer.
		if ( empty($name) OR empty($message)) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Oops! Hubo un error con su envío. Por favor complete la forma y envíela de nuevo.";
			exit;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Oops! Hubo un error con su envío. Por favor asegúrese de que su correo siga el formato correo@ejemplo.com";
			exit;
		}

		// Set the recipient email address.
		// FIXME: Update this to your desired email address.
		$recipient = "pepe.lujan2@gmail.com";

		// Set the email subject.
		$subject = "Mensaje enviado desde la forma de contacto del sitio web de Besltone";

		// Build the email content.
		$email_content = " \n";
		if($sucursal)
			$email_content .= "Sucursal: $sucursal\n";
		$email_content .= "Nombre: $name <$email>\n";
		$email_content .= "Tel: $tel\n\n";
		$email_content .= "Mensaje:\n$message\n";

		// Build the email headers.
		$email_headers = "De: $name <$email>";

		// Send the email.
		if (mail($recipient, $subject, $email_content, $email_headers)) {
			// Set a 200 (okay) response code.
			http_response_code(200);
			echo "¡Gracias! Su mensaje ha sido envíado.";
		} else {
			// Set a 500 (internal server error) response code.
			http_response_code(500);
			echo "Oops! Hubo un error no pudimos mandar su mensaje.";
		}

	} else {
		// Not a POST request, set a 403 (forbidden) response code.
		http_response_code(403);
		echo "Hay un problema con su envío, por favor intentelo de nuevo.";
	}
}

add_action( 'admin_post_nopriv_contact_form', 'send_email' );
add_action( 'admin_post_contact_form', 'send_email' );
?>