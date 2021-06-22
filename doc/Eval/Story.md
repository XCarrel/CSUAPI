# MOB1 Evaluation

## Contexte métier

Les secouristes ont des horaires variables. Chaque type d'horaire est connu par un "code
court".

Voici un exemple de planning tel que les secouristes reçoivent sous forme de fichier pdf.

![flashMessage image](polypoints.PNG)

Ces horaires sont importés par le responsable du service dans l'application de bureau (backend).
Il souhaite que chaque secouriste confirme avoir pris connaissance de son planning, ou alors qu'il lui signale tout problème éventuel, p.ex: "J'avais demandé congé le 15 juillet, mais on m'a mis un horaire!..."

Du coup, le status de confirmation d'un horaire est l'un de:

- Inconnu
- A discuter
- Confirmé

## Story

En tant que secouriste  
Je veux pouvoir confirmer (ou pas) mes horaires de travail avec l'application mobile

## Tests (fonctionnalité)

1. Après m'être connecté, j'ai un bouton/menu "Horaires à confirmer" qui est visible si et seulement si il y a des horaires qui me concernent qui ne sont pas confirmés
2. Le bouton "Horaires à confirmer" et orné d'une pastille de couleur qui indique le nombre de confirmations requises
3. Lorsque je clique le bouton "Horaires à confirmer", j'arrive sur une page qui me permet de répondre un à un aux horaires non confirmés
3. La page me permet en tout temps de savoir combien de confirmation il me reste à faire
3. Les horaires que j'ai précédemment mis en 'A discuter' montrent la raison que j'avais fournie au moment de la saisie initiale
4. La page permet de modifier un status:

    - De "Inconnu" à "A discuter"
    - De "Inconnu" à "Confirmé"
    - De "A discuter" à "Confirmé"

5. Un champ texte me permet de saisir la raison pour laquelle je ne suis pas d'accord avec l'horaire. Ce champ n'apparaît que quand je sélectionne l'état "A discuter". Ce champ n'apparaît que si je sélectionne le status 'A discuter'
5. Un horaire qui passe dans l'état "Confirmé" disparaît immédiatement
6. Quand tous les horaires sont confirmés, la page affiche "Vous avez confirmé tous vos horaires". Quand je retourne aux pages précédentes, le bouton "Horaires à confirmer" a disparu.
