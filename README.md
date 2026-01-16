# Calculatrice IMC (Indice de Masse Corporelle)

Dépôt pour mes codes - Application web pour calculer l'IMC

## Description

Application web permettant de calculer l'Indice de Masse Corporelle (IMC) en fonction du poids et de la taille. L'application fournit une interprétation du résultat avec un code couleur pour une meilleure visualisation.

## Fonctionnalités

- ✅ Calcul de l'IMC à partir du poids (kg) et de la taille (m)
- ✅ Interprétation automatique du résultat :
  - **Bleu** : Insuffisance pondérale (IMC < 18.5)
  - **Vert** : Corpulance normale (18.5 ≤ IMC < 25)
  - **Orange** : Surpoids (25 ≤ IMC < 30)
  - **Rouge** : Obésité (IMC ≥ 30)
- ✅ Interface utilisateur responsive et élégante
- ✅ Design moderne avec image de fond

## Technologies utilisées

- **PHP** : Logique de calcul et traitement des données
- **HTML** : Structure de la page
- **CSS** : Style et mise en page

## Structure du projet

```
Calcul_IMC/
├── imc.php       # Fichier principal (formulaire et logique PHP)
├── imc.css       # Feuille de styles
├── image/        # Dossier contenant les images (fond d'écran)
└── README.md     # Documentation
```

## Étapes d'exécution du code

### 1. Installation

1. Placez les fichiers dans le répertoire `htdocs` de votre serveur web (XAMPP, WAMP, etc.)
2. Vérifiez que PHP est installé et fonctionnel

### 2. Accès à l'application

1. Lancez votre serveur web (Apache via XAMPP)
2. Accédez à l'application via `http://localhost/Calcul_IMC/imc.php`

### 3. Utilisation

1. Entrez votre poids en kilogrammes (ex: 70)
2. Entrez votre taille en mètres (ex: 1.75)
3. Cliquez sur le bouton "Calculer"
4. Le résultat s'affiche avec l'interprétation et le code couleur correspondant

## Formule utilisée

$$IMC = \frac{\text{Poids (kg)}}{(\text{Taille (m)})^2}$$

## Auteur

MansaGit-

## Notes

- Les entrées acceptent les décimales (ex: 0.01)
- La taille doit être entrée en mètres (1.75 m et non 175 cm)
- Validation côté serveur pour éviter les erreurs de division par zéro