URL Shortener
This is a simple URL shortener application that allows users to input long URLs, which are then shortened using MD5 encryption. The original URL and its corresponding shortened URL are saved in a database for easy access.

Features
URL Input: Users can enter a long URL to shorten it.
MD5 Encryption: Each URL is assigned a unique short URL using MD5 encryption.
Database Storage: Original URLs and shortened URLs are stored in a MySQL database.
Unique Short URL: The generated short URL is unique for each original URL.
Installation
Clone this repository to your local machine:

bash
Copy
Edit
git clone https://github.com/yourusername/url-shortener.git
Set up your database. You need a MySQL database with the following schema:

sql
Copy
Edit
CREATE TABLE urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    original_url VARCHAR(255) NOT NULL,
    short_url VARCHAR(255) UNIQUE NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
Configure your database connection in the config.php file.

Install the necessary dependencies. You can use Composer for any PHP dependencies.

Run the application locally or upload it to your server.

Usage
Frontend: A simple HTML form allows users to input their long URLs. Upon submission, the form sends a request to the PHP server to generate the short URL.
Backend: The PHP script handles the URL shortening by applying MD5 encryption to the original URL and storing both the original and short URLs in the database.
Example:
Input URL:
ruby
Copy
Edit
https://www.example.com/some/long/url
Output Short URL:
arduino
Copy
Edit
https://short.url/abc123
Database Schema
Table: urls

id (INT, auto-increment)
original_url (VARCHAR)
short_url (VARCHAR, unique value)
timestamp (DATETIME)
Contributing
Feel free to fork this repository and submit pull requests for improvements or bug fixes.

License
This project is open-source and available under the MIT License.
