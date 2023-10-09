# Plugin Wordpress pour le site MJ Conseil

## Que contient ce répertoire ?

Ce répertoire contient le plugin wordpress créé dans le cadre du développement du site mj-conseiL.fr


## Pourquoi ce plugin ?

Même dans une utilisation en mode "headless", WordPress  reste CMS orienté "page" et ne permet pas d'obtenir une liste d'une "ressource" donnée.

Par exemple, imaginons un cas où sur une page A l'on souhaite afficher une série de "référence client" et que cette série doit aussi être reprise sur la page B.

WordPress nous oblige à dupliquer un bloc contenant cette série de "référence client" sur deux pages.

Durant le développement du site, nous trouvions plus simple de pouvoir disposer d'une API permettant de récupérer cette liste de "ressource".


##  À quoi sert ce plugin ?

Ce plugin sert principalement à créer des [Custom Post Type](https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/) nécessaire pour pouvoir utiliser des "ressources" comme des références métiers, des offres de service, ...

## Comment l'installer ?


Pour ce faire, il suffit de mettre le dossier "mj-custom-resources" dans le dossier `/wp-content/plugins/mj-custom-resources` de WordPress et de l'activer dans l'espace admin.




