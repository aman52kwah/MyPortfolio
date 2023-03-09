<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px;
		}

		label {
			margin-bottom: 10px;
		}

		input[type="text"], textarea {
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			width: 100%;
			max-width: 400px;
			resize: none;
		}

		button[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			width: 100%;
			max-width: 400px;
		}

		button[type="submit"]:hover {
			background-color: #555;
		}

		@media (min-width: 768px) {
			form {
				flex-direction: row;
				justify-content: center;
			}

			label, input[type="text"], textarea, button[type="submit"] {
				margin: 10px;
			}

			label {
				width: 150px;
				text-align: right;
			}

			input[type="text"], textarea {
				width: 300px;
			}
		}
	</style>
</head>
<body>
	<header>
		<h1>Contact Us</h1>
	</header>
	<form method="post" action="submit-form.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" rows="5" required></textarea>

		<button type="submit">Send</button>
	</form>
</body>
</html>





