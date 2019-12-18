# DWM12

Voici l'application qui permets de gérer les apprenants et les compétences de la promo DWM12.
Grâce à cette application, vous pourrez consulter les informations des apprenants telles que leurs informations personnelles ou leurs compétences.
Vous aurez également la possibilité d'ajouter, modifier ou supprimer des données.

Pour accéder aux données de l'application, vous aurez besoin d'utiliser :
- Vagrant
- Laravel 
- Postamn
- Navigateur internet (de préférence Chrome)


# INSTALLATION DE LARAVEL AVEC VAGRANT UBUNTU/XENIAL64
Bien retenir son adresse IP lors de l'installation de la vagrant

### Dans Vagrantfile -> nano Vagrantfile <-
    - Décommenter :
config.vm.provider "virtualbox" do |vb|

Modifier la quantité de mémoire + décommenter : 
vb.memory = "2048" + décommenter le end
end

/!\ Dans /var/www/html de la vagrant /!\
- sudo apt update
- sudo apt install apache2 -y
- sudo apt install mysql-server -y
- sudo apt-add-repository ppa:ondrej/php
- sudo apt update
- sudo apt install php7.4 -y
- sudo apt install php7.4-zip -y
- sudo apt install zip -y
- sudo apt install php7.4-mysql

Sur internet : https://getcomposer.org/
Cliquer sur “Dowload” et copier-coller les lignes de commandes dans la vagrant /var/www/html
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

Déplacer le composer.phar en local et le renommer en -> composer <- avec la commande suivante :
- sudo mv composer.phar /usr/local/bin/composer  
installer les paquets manquants avec :
- composer install
Vérifier que le composer ait été déplacé en tapant -> composer <-

Installer les paquets suivants :
- sudo apt install php7.4-mbstring -y
- sudo apt install php7.4-dom -y
- composer create-project --prefer-dist laravel/laravel NomDuProjet
- sudo nano /etc/apache2/sites-available/000-default.conf
Modifier le DocumentRoot avec le bloc suivant
    <Directory /var/www/html/NomDuProject/public>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
    </Directory>

- commande magique sudo service apache2 restart
- sudo nano /etc/apache2/envvars
        - modifier www-data en vagrant x2
- commande magique sudo service apache2 restart

Retourner sur le navigateur et actualiser pour vérifier l'installation de LARAVEL

FÉLICITATIONS, VOUS VOICI SUR LA PAGE D'ACCUEIL DE LARAVEL !

### GESTION DES API AVEC POSTMAN
Télécharger l'application POSTMAN -> https://www.getpostman.com/ <-
Ouvrir POSTMAN 
Dans l'URL, taper son adresse IP/api/NomDeLaPage
