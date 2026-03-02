<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^wps.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . wps.php [L]
</IfModule>
