<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$lang['help_overview'] = "DTS4K est une application de reporting de statistiques de lecteur, développée et commercialisée TechKnow Inc. La solution est déployée sur des appareils de temporisation. C'est un outil pour les gestionnaires de magasins et le personnel désigné pour exécuter divers rapports pour aider à examiner les performances sur le site.

Il a des rapports allant des détails individuels de la voiture aux moyennes à différents points du lecteur par plusieurs périodes. Il permet également aux utilisateurs de comparer les performances de deux jours.

Voici ses exigences logicielles.

Serveur HTTP
PHP 5.5 ou supérieur.
Bibliothèque d'extension PHP-SQLITE3.";

$lang['help_general'] = "<strong>Termes</strong>

Voici quelques termes utilisés dans cette aide, avec les synonymes correspondants dont vous pourriez être plus familier dans votre organisation.

Fenêtre de paiement     de la fenêtre de paiement, Fenêtre de paiement
Fenêtre de réception    de la fenêtre de ramassage, fenêtre de service
Fenêtre de menu     Fenêtre de commande

<strong>S'identifier</strong>

Les Logins sont contrôlés centralement et le mot de passe sera fourni par Techknow Team. L'utilisateur de connexion réussie sera redirigé vers le rapport de détail des voitures.

<strong>Connectez - Out</strong>


Il existe un lien de connexion au coin supérieur droit de chaque page afin que l'utilisateur puisse se déconnecter de l'application de n'importe où dans l'application. Après la connexion, l'utilisateur sera redirigé vers la page de connexion. Il est conseillé de se déconnecter de la session une fois que nous avons terminé avec les rapports d'affichage.

En outre, l'application dispose d'une fonction de déconnexion automatique intégrée qui déconnecte l'utilisateur après un intervalle d'inactivité désigné. Actuellement, cette valeur est fixée à 10 minutes.

<strong>Menu Toggle</strong>

Il existe un bouton de basculement sur le menu qui, après le clic, se cache et affiche le menu de gauche en variante.
";

$lang['help_cars_details'] = "Le rapport Détails des voitures permet à l'utilisateur d'analyser comment chaque voiture horloge son temps à différents points du lecteur.

L'utilisateur sélectionnera une date et une heure de début à partir du calendrier et ensuite il / elle sélectionnera la date et l'heure de fin du prochain calendrier. La plage de dates sélectionnée par l'utilisateur doit être un intervalle de temps positif pour lequel le rapport doit être généré. Après avoir sélectionné l'utilisateur de la plage de dates, il faudra cliquer sur le bouton 'Générer le rapport' qui affichera les données demandées.

En résumé, il indique à quelle heure une voiture est arrivée au lecteur et à combien de temps il a passé dans une fenêtre (Commande, Pay, Serve) et le temps passé en attente dans les files d'attente.

Le rapport comprend les colonnes suivantes.

1. Sr #     Numéro de série de la voiture dans le rapport.
2. Heure d'arrivée  Heure d'arrivée de la voiture détectée au lecteur.
3. Car In Lane  The Lane dans lequel la voiture est présente. Valeurs possibles A, B ou Vide
4. Saluer   le temps pris pour saluer la voiture.
5. Menu     Temps pris pour la commande.
6. Queue1   Temps passé en file d'attente entre le point d'ordre et le point de caisse.
7. La caissière     Temps consacré à l'argent / fenêtre de paiement.
8. Queue2       Temps passé en file d'attente entre le point de caisse et le point de service.
9. Guichet      Temps consacré à la fenêtre de service.
10. Total   Temps total passé par la voiture dans drive-thru.";

$lang['help_hourly_report'] = "Le rapport horaire permet à l'utilisateur d'analyser le temps moyen et le temps total passé par les voitures pendant une heure choisie par l'utilisateur afin de comparer les différents points du lecteur.

L'utilisateur devra sélectionner la date et l'heure dans le calendrier et cliquer sur 'Générer le bouton de rapport' pour exécuter le rapport.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_daypart_report'] = "Day Part Report permet à l'utilisateur d'analyser la moyenne et le temps total passé par les voitures lors d'une «partie de jour» sélectionnée. Ce rapport donnera également une moyenne pour différents points dans le drive-thru.

L'utilisateur devra sélectionner la date du calendrier et la partie Jour dans une liste déroulante, puis cliquez sur le bouton Générer le rapport pour exécuter le rapport.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_daily_report'] = "Daily Report permet à l'utilisateur d'analyser la moyenne et le temps total passé par les voitures pendant une journée choisie. Ce rapport donnera également une moyenne pour différents points dans le drive-thru.

L'utilisateur sélectionnera la Date dans le calendrier et devra ensuite cliquer sur le bouton Générer le rapport pour exécuter le rapport.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_weekly_report'] = "Le rapport hebdomadaire permet à l'utilisateur d'analyser la durée moyenne et totale passée par les voitures pendant une semaine sélectionnée par l'utilisateur à différents points du lecteur.

L'utilisateur sélectionne une date représentant le début de la semaine à partir du calendrier, puis cliquez sur le bouton Générer le rapport pour exécuter le rapport. Le système générera le rapport pendant 7 jours (semaine) à partir de la date sélectionnée par l'utilisateur.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_monthly_report'] = "Le rapport mensuel permet à l'utilisateur d'analyser le temps moyen et le temps total passé par les voitures pendant un mois sélectionné par l'utilisateur à différents points du lecteur.

L'utilisateur devra sélectionner le mois et l'année dans le menu déroulant, puis cliquer sur le bouton Générer le rapport pour exécuter le rapport.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_yearly_report'] = "
Le rapport annuel permet à l'utilisateur d'analyser le temps moyen et le temps total passé par les voitures au cours d'une année sélectionnée par l'utilisateur à différents moments du lecteur.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_custom_report'] = "Le rapport personnalisé permet à l'utilisateur d'analyser le temps moyen et le temps total passé par les voitures pendant une plage DateTime sélectionnée par l'utilisateur à différents points du lecteur.

Ce rapport comporte 5 groupes correspondant à un événement dans le lecteur, par exemple, saluer, menu, espèces, ramassage et total. Chaque section a son temps moyen, son temps total et son total de voitures. Le temps moyen est en format MM: SS (minutes et secondes) et le temps total est en format HH: MM (heure, minutes). Au sein de chaque groupe, nous affichons également les 5 premières voitures en termes de temps minimum consacré au point correspondant, indiquant le numéro de voiture, la date et l'heure et le temps en secondes.

Le rapport comporte une autre section intitulée Objectif atteint. Il comporte trois sous-sections: vert jaune et rouge. Chacun montre le pourcentage et le nombre de voitures situées dans la section suivante. L'utilisateur a également la possibilité de modifier la valeur cible utilisée pour chaque section de but. Vous devrez générer le rapport pour afficher les résultats en fonction des objectifs révisés.";

$lang['help_daywise_comparison_report'] = "Le rapport de comparaison permet à l'utilisateur de comparer le temps moyen passé à différents points de deux jours sélectionnés par lui-même.

L'utilisateur sélectionnera le Jour 1 dans le calendrier et sélectionnez Jour 2 dans le prochain calendrier et devra cliquer sur Générer le bouton Rapport.

Le rapport comporte les colonnes suivantes à comparer pendant deux jours.

la date:    La Date / s sélectionnée par l'utilisateur.
Saluer:     Temps moyen pris pour saluer les voitures.
Menu:       Temps moyen pour prendre les commandes des voitures.
les espèces: 	Temps moyen consacré à la caisse.
PUW: 	Temps moyen consacré à la fenêtre de service.
le total: 	Moyenne Temps total passé dans drive-thru.
Des voitures: 	Nombre total de voitures.
le parking:     Les voitures qui n'apparaissent pas dans la fenêtre de commande
Extraire:       Les voitures qui sont des voitures";

$lang['help_hourly_comparison_report'] = "Le rapport de comparaison permet à l'utilisateur de comparer le temps moyen passé à différents points sur une base horaire de deux jours sélectionnés par lui-même.

L'utilisateur sélectionnera le Jour 1 dans le calendrier et sélectionnez Jour 2 dans le prochain calendrier et devra cliquer sur Générer le bouton Rapport.

Le rapport comporte les colonnes suivantes à comparer pendant deux jours.

la date:    La Date / s sélectionnée par l'utilisateur.
Saluer:     Temps moyen pris pour saluer les voitures.
Menu:       Temps moyen pour prendre les commandes des voitures.
les espèces: 	Temps moyen consacré à la caisse.
PUW: 	Temps moyen consacré à la fenêtre de service.
le total: 	Moyenne Temps total passé dans drive-thru.
Des voitures: 	Nombre total de voitures.
le parking:     Les voitures qui n'apparaissent pas dans la fenêtre de commande
Extraire:       Les voitures qui sont des voitures";

$lang['help_daypart_comparison_report'] = "
Le rapport de comparaison permet à l'utilisateur de comparer le temps moyen passé à différents points pendant la période de deux jours sélectionnée par lui-même.

L'utilisateur sélectionnera le Jour 1 dans le calendrier et sélectionnez Jour 2 dans le prochain calendrier et devra cliquer sur Générer le bouton Rapport.

Le rapport comporte les colonnes suivantes à comparer pendant deux jours.

la date:    La Date / s sélectionnée par l'utilisateur.
Saluer:     Temps moyen pris pour saluer les voitures.
Menu:       Temps moyen pour prendre les commandes des voitures.
les espèces: 	Temps moyen consacré à la caisse.
PUW: 	Temps moyen consacré à la fenêtre de service.
le total: 	Moyenne Temps total passé dans drive-thru.
Des voitures: 	Nombre total de voitures.
le parking:     Les voitures qui n'apparaissent pas dans la fenêtre de commande
Extraire:       Les voitures qui sont des voitures";

$lang['help_settings'] = "Sur la page des paramètres, l'utilisateur peut afficher les paramètres de la minuterie qui sont listés ci-dessous:
1. Version à minuterie:  Version du logiciel de tkets2
2. Buts cibles:   Objectifs définis pour le lecteur par lequel peut être classé en vert / jaune / rouge
3. Pièces de jour:   Liste des parties Jour déclarées pour le module de minuterie
4. Heures d'ouverture:    Horaires opérationnels de la boutique";

