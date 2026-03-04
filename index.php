# BEGIN WordPress

RewriteEngine On

# Pastikan sitemap.xml tidak di-redirect ke index.php
RewriteRule ^sitemap\.xml$ - [L]
RewriteRule ^wp-sitemap\.xml$ - [L]

# Default WordPress rewrite
RewriteBase /
RewriteRule ^index\.php$ - [L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# END WordPress
