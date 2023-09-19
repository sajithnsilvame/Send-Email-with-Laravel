

# Simple Way To Send Email via Gmail SMTP In Laravel

This Laravel project demonstrates a simple and straightforward way to send emails using Gmail's SMTP server. By following the steps outlined below, you can easily set up email functionality within your Laravel application.

## Prerequisites

Before you begin, ensure that you have the following prerequisites installed on your development environment:

- [Composer](https://getcomposer.org/): Dependency manager for PHP.
- [Laravel](https://laravel.com/): The Laravel framework.

## Installation

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/sajithnsilvame/Send-Email-with-Laravel.git
   ```

2. Change into the project directory:

   ```bash
   cd Send-Email-with-Laravel
   ```

3. Install project dependencies using Composer:

   ```bash
   composer install
   ```

4. Create a `.env` file by copying the `.env.example` file and configure it with your Gmail SMTP credentials:

   ```bash
   cp .env.example .env
   ```

   Edit the `.env` file and update the following variables with your Gmail SMTP settings:

   ```
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your-email@gmail.com
   MAIL_PASSWORD=your-email-password
   MAIL_ENCRYPTION=tls
   ```

   **Note:** Make sure to use an "App Password" if you have two-factor authentication (2FA) enabled on your Gmail account. [Generate an App Password](https://support.google.com/accounts/answer/185833?hl=en) if needed.

5. Generate a new application key:

   ```bash
   php artisan key:generate
   ```

6. Run the development server:

   ```bash
   php artisan serve
   ```

7. Access the application in your web browser at `http://localhost:8000`.

## Usage

1. Visit the application in your web browser.

2. Click on the "Send Email" link to open the email form.

3. Fill out the email form with the recipient's email address, subject, and message.

4. Click the "Send Email" button to send the email using Gmail SMTP.

5. You should see a success message if the email was sent successfully.

## Troubleshooting

- If you encounter any issues while sending emails, ensure that your Gmail account's security settings are correctly configured. Check for any suspicious activity and make sure that "Less secure apps" is enabled in your Google account settings (although this is not recommended for production use).

## Contributing

Contributions are welcome! If you encounter a bug or have suggestions for improvements, please [create an issue](https://github.com/sajithnsilvame/Send-Email-with-Laravel/issues) or submit a pull request.

## Author

[Sajith N Silva](https://sajithnsilvame.github.io/portfolio/).

## License

This project is open-source and available under the [MIT License](LICENSE).

---

