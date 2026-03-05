server {
    listen 80;
    server_name paul-blumen.de www.paul-blumen.de;

    root /var/www/html;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass my-portfolio-wordpress:80;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}