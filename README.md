# Introduction_php
This is an french introduction to php for designer students 
Pour suivre cette introduction, il est recommendé de maîtriser l'introduction HTML.

Php est un langage interprété côté serveur. Il a pour but d’interpréter des données (provenant d'une base de données) et de renvoyer du HTML au client web (notre navigateur).
Ainsi, lorsqu'un utilisateur accède à une page générée par des fichiers php, il interroge deux serveurs différents : le serveur php qui génère les pages HTML, et contient donc les informations pour l'interface client ; et le serveur contenant la base de données, qui stocke les données influant sur l'interface utilisateur.

Pour cet exercice, il nous faudra donc avoir un serveur sous la main pour tester notre code. Plutôt qu'utiliser un serveur distant, il est plus simple d'avoir son serveur en local, que l'on peut executer grâce à [Mamp](https://www.mamp.info/en/downloads/) pour MacOs/Windows ou [Wamp](https://www.wampserver.com/) pour Windows (uniquement).

## Le serveur local
L'adresse du site sera généralement [http://localhost:8080/monsupersite/](http://localhost:8080/monsupersite/).
Un dossier qui sert d'espace de stockage pour les différents sites sera créé dans le dossier d'installation de votre logiciel. Pour chacun des différents sites que vous créerez, il faudra créer un sous-dossier pour les séparer.


* Mamp
  Le dossier **htdocs** est créé dans le dossier d’installation de l’application Mamp. Cela donne la hierarchie de dossiers suivantes : mamp/htdocs/monsupersite_01. L'adresse du site sera donc : [http://localhost:8888/monsupersite_01](http://localhost:8888/monsupersite_01).
* Wamp
  Le dossier **www** est créé dans le dossier d’installation de l’application Wamp. Cela donne la hierarchie de dossiers suivantes : wamp/www/monsupersite_01. L'adresse du site sera donc : [http://localhost:8888/monsupersite_01](http://localhost:8888/monsupersite_01).

Commençons par faire nos premiers essais dans un dossier **premierpas**, dans un fichier **premiers_essais.php**.

## Premier pas avec PHP
> Les exemples sont dans le dossier **01_premierspas**.
Dans un fichier .php, on peut écrire du HTML classique ; il faut cependant encadrant tout code PHP par des balises **<?php ?>** :
```php
<?php 
 # mon super code php
?>
```

On peut donc écrire par exemple : 
```php
 <body>
    <section>
        <?php 
            echo 'Voici mon super texte php !'; 
        ?>
    </section>
 <body>
```

En allant sur votre site ([http://localhost:8888/premierspas](http://localhost:8888/premierspas)), vous devriez voir affiché le texte 'Voici mon super texte php !'. Vous noterez l'utilisation de **echo** qui permet de renvoyer dans le html une valeur ou une string (entre guillemets). 

### Les variables

Les variables permettent de stocker des informations diverses telles qu'un nombre, du texte sous forme de chaines de caractères, des tableaux... Elles se déclarent avec un **$** devant le nom de celles-ci. Si l'on souhaite créer une nouvelle variable **stock_boulangerie** pour comptabiliser le nombre de baguettes dans une boutique, on va donc la déclarer de la manière suivante :
```php
  $stock_boulangerie = 18 ;
```

Utiliser des variables permet d'avoir un affichage dynamique de notre page : les informations envoyées à l'utilisateur n'ont plus besoin d'être écrites en brut dans le html, mais peuvent être le résultat de calculs, de conditions...
Pour notre boulangerie, on va vouloir comptabiliser le stock restant après le passage d'acheteurs. On déclare donc d'abord le nombre de baguettes achetées par deux clients, puis on renvoie l'information :
```php
  $stock_boulangerie = 18 ;
  $achat_01 = 4 ;
  $achat_02 = 2 ;

  echo 'La boulangerie a en stock ' .$stock_boulangerie. ' baguettes. </br>' ;
  echo 'Après le premier acheteur, il reste ' .$stock_boulangerie - $achat_01. ' baguettes. </br>';
  echo 'Après le dexuième acheteur, il reste ' .$stock_boulangerie - $achat_01 - $achat_02. ' baguettes. </br>';
```

On renvoie ici dans le html une chaîne de caractère particulière : elle contient du texte, des variables, et du html : on appelle ça la **concaténation** : on ajoute plusieurs éléments à une chaîne de caractère. Pour cela, il faut encadrer de points **.** les variables qu'on associe à notre chaine.
'</br>' permet d'effectuer un retour à la ligne en html. Intégré dans la chaine de caractère, elle sera interprétée également comme du html. On peut donc écrire du html complet dans un **echo ' '**.

### Conditions
On peut écrire du code qui est soumis à une ou plusieurs condition(s) avec la syntaxe **if** (si), **else** (sinon), **elseif** (sinon si) pour être affiché grâce à des **opérateurs** :
* == strictement égal (à ne pas confondre avec **=** qui n'est pas utilisé pour vérifier un égalté, mais pour définir une valeur !)
* != différent
* < plus petit que
* \> plus grand que
* <= inférieur ou égal à
* \>= inférieur ou égal à
* && et
* || ou
  
Cela donne : 
```php
if(condition_01 == true){
  // j'affiche quelquechose
} else { 
  // si condition_01 est false, alors j'affiche ceci
}

if (nombre_01 > nombre_02){
  // j'affiche quelquechose
} elseif (nombre_01 != 10){
  //si nombre_01 n'st pas supérieur à nombre_02 et qu'il n'est pas égal à 10, alors j'affiche ceci
}

if (condition_01 && condition_02){
  //si ET la condition 01 ET la condition 02 sont valdie, j'affiche quelquechose.
}
```

### Boucles
Comme en javascript et n'importe quel autre language de programmation, on retrouve le **for** qui permet d'itérer un certain nombre de fois selon une condition :
```php
for ($i = 0 ; i < 10 ; i++){
  //ce code sera exécuté 10 fois
}
```
On initialise la boucle avec **\$i = 0**. Tant que i reste inférieur à 10, on va de nouveau exécuter le code entre les brackets, et on incrémente de 1 **\$i** avec **$i++**.

donc 
```php
for ($i = 0 ; i < 10 ; i++){
  echo $i.'</br>';
}
```

### Tableaux
En php, on crée un tableau grâce à la fonciton **array()**. On peut ensuite récupérer un élément du tableau en indiquant son index (sa position dans le tableau). 
NB : L'index d'un tableau commence à 0. $montableau[1] correspondra donc au deuxième élément dans le tableau, $montableau[2] au 3e etc...
Par exemple :
```php
$repliques = array('Je ne mange pas de graines !', "J'apprécie les fruits au sirop.", "Moi ma femme, elle a pas de moustache !", "Le gras, c'est la vie.")

echo $repliques[1] ; // affiche J'apprécie les fruits au sirop.
```

On peut donc faire une boucle pour afficher l'intégralité de mon tableau :
```php
for ($i = 0 ; $i < count($repliques) ; $i ++){
  echo $repliques[$i]. '</br>';
}
```
On utilise là **count()** qui permet d'avoir le nombre d'élements inclus dans mon tableau ( dans notre cas : 4). 


## Les fonctions
Les fonctions permettent d'écrire une suite d'actions à effectuer (un algorithme) qui vont pouvoir être exécutées à chaque fois que l'on appelle cette fonction. On déclare une fonction de la manière suivante :
```php
function myfunction(){
  // code à exécuter
}
```
On peut passer en paramètre ( dans les parenthèses) une valeur, pour que le code s'exécute selon celle-ci. Pour notre exemple de boulangerie, on souhaiterait pouvoir connaître le coût de la commande selon le nombre de baguettes :
```php
function prixCommande ($nombre_de_baguettes_achetees){
  return $nombre_de_baguettes_achetees * 0.95 ; // en considérant qu'une baguette coûte 95 centimes
}
```
On utilise ici **return** qui va renvoyer une valeur lorsque l'on appelle la fonction. Sans cela, la fonction effectuera bien les calculs, mais ne renverra pas de valeur. On affiche donc le résultat du prix :
```php
  echo 'Cela fera' .prixCommande(4). '€.' ;
```


## Programmation dynamique
> Les exemples sont dans le dossier **02_dynamique**.
Php intègre un certain nombres de fonctionnalités qui permettent notamment de scinder une interface web par composants, gestion des formulaires, envoi/récupération de données vers/depuis un serveur etc...

### Structuration d'une page web par composants
La fonction **include()** inclut le code contenu dans un autre fichier php à l'endroit indiqué dans le code. Cela permet de segmenter le contenu d'une page web,  et de séparer certains élements qui sont récurrents quelque soit la page d'un site donné (par exemple le header, la navigation et le footer).
```php
  <footer>
    <?php include('footer.php'); ?>
  </footer>
  ```

  Ainsi, on peut construire son *layout* et ne changer finalement que le **contenu** de la page. Dans **index.php** (placé à la racine de notre dossier, comme le index.html), on va donc construire notre layout de page, et on va donc servir un contenu différent selon les pages grâce à un fichier que l'on nommera **content.php**. Dans ce fichier, on va donc renvoyer un contenu différent selon l'url.

### Récupérer des données
Il y a deux méthodes pour transmettre des données d'une page à l'autre : 
* POST : envoie des données qui ne sont pas visibles par l'utilisateur
* GET : envoie des données par l'url, et donc visible par l'utilisateur

#### GET
On peut récupérer des données qui sont stockées dans l'url grâce à **$_GET['donnee']**. Ainsi, si mon url correspond à *http://localhost:8080/02_dynamique/?page=baguettes*, ``\$_GET['page']`` donnera ``baguettes``.
C'est donc avec ceci que l'on va déterminer le contenu de notre page (dans **content.php**) :
```php
if ($_GET['page'] == 'baguettes'){
    include('baguettes.php');
} elseif ($_GET['page'] == 'histoire'){
    include('histoire.php');
} elseif ($_GET['page'] = 'location'){
    include('location.php');
}
```
