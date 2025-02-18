# URL Shortener

This is a simple URL shortener application that allows users to input long URLs, which are then shortened using MD5 encryption. The original URL and its corresponding shortened URL are saved in a database for easy access.

## Features
- **URL Input**: Users can enter a long URL to shorten it.
- **MD5 Encryption**: Each URL is assigned a unique short URL using MD5 encryption.
- **Database Storage**: Original URLs and shortened URLs are stored in a MySQL database.
- **Unique Short URL**: The generated short URL is unique for each original URL.

## Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/url-shortener.git


CREATE TABLE urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    original_url VARCHAR(255) NOT NULL,
    short_url VARCHAR(255) UNIQUE NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
