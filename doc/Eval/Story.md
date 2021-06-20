# MOB1 Evaluation

## Contexte

Les secouristes ont des horaires variables. Chaque type d'horaire est connu par un "code
court".

Voici un exemple de planning tel que les secouristes reçoivent sous forme de fichier pdf.

![flashMessage image](polypoints.PNG)

Ces horaires sont importés dans l'application de bureau (backend).
Il souhaite que chaque secouriste confirme avoir pris connaissance de son planning, ou alors qu'il lui signale tout problème éventuel, p.ex: "J'avais demandé congé le 15 juillet, mais on m'a mis un horaire!..."

Le status d'un horaire est l'un de:

- Inconnu
- A discuter
- Confirmé

## Story

En tant que secouriste  
Je veux pouvoir confirmer mes horaires de travail avec l'application mobile

## Tests (fonctionnalité)

1. Après m'être connecté, j'ai un bouton/menu "Horaires à confirmer" qui est visible si et seulement si il y a des horaires qui me concernent qui ne sont pas confirmés
2. Le bouton "Horaires à confirmer" et orné d'une pastille de couleur qui indique le nombre de confirmations requises
3. Lorsque je clique le bouton "Horaires à confirmer", j'arrive sur une page qui affiche le même nombre d'horaires à confirmer que sur la pastille
4. La page permet de modifier individuellement le status des horaires:

    - De "Inconnu" à "A discuter"
    - De "Inconnu" à "Confirmé"
    - De "A discuter" à "Confirmé"

5. Quand je sélectionne l'état "A discuter", un champ texte me permet de saisir la raison. Ce champ n'apparaît pas si je sélectionne 'Confirmé'
5. Un horaire qui passe dans l'état "Confirmé" disparaît de la liste
6. Quand tous les horaires sont confirmés, la page affiche "Vous avez confirmé tous vos horaires". Quand je retourne aux pages précédentes, le bouton "Horaires à confirmer" a disparu.
