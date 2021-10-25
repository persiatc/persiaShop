<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>

    RewriteEngine On

    # Don't touch anything when coming from test subdomain
    RewriteCond %{HTTP_HOST} ^eshop\. [NC]
    RewriteRule ^ - [L]

    # Redirect Trailing Slashes...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.+)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ /index.php [L]
</IfModule>




RewriteBase /

RewriteCond %{HTTP_HOST} !^eshop.persiatelecom.ir
RewriteCond %{REQUEST_URI} !^public
RewriteRule ^(.*)$ public/$1 [L]

RewriteCond %{HTTP_HOST} ^eshop.persiatelecom.ir
RewriteCond %{REQUEST_URI} !^public
RewriteRule ^(.*)$ public/ [L]


