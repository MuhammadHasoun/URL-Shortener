Deze code is gemaakt om de URL's te kunnen verkorten. De gebruiker geeft de link die hij wilt verkorten en vervolgens stuurt de JavaScript een verzoek naar het PHP-serverbestand om de URL te maken met een unieke MD5-encryptie. Daarna slaat de server de URL op in de database.

Database Schema (Tabel: urls):
• id (INT, auto-increment)
• original_url (VARCHAR)
• short_url (VARCHAR, unieke waarde)
• timestamp (DATETIME)
