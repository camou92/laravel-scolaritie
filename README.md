installer livewire
=> composer require livewire/livewire

installation de jetstream
=> composer require laravel/jetstream
=> php artisan jetstream:install livewire
=> npm install
npm run build
php artisan migrate

Les Niveaux
=> php artisan make:controller NiveauController

Creer component list niveau avec livewire
=> php artisan make:livewire liste-niveaux

Creer modéle pour les annees scolaires
=> php artisan make:model SchoolYear -m
Creer controller pour les années scolaires
=> php artisan make:controller SchoolYearController
lister les annees scolaires
=> php artisan livewire:make settings
Ajout annee scolaire
créer la function create dans le controller SchoolYearController
créer le livewire
=> php artisan livewire:make CreateSchoolYear

Gérer les niveaux
=> php artisan make:model level -m
formulaire création niveaux
=> php artisan livewire:make createLevel
Editer un niveau
=> php artisan livewire:make EditLevel

Gérer les classes
=> php artisan make:model Classe -m
controller classe
=> php artisan make:controller ClassController
créer le composant livewire
=> php artisan livewire:make ListeClasse
create composant create
=> php artisan livewire:make CreateClasse
composant livewire pour editer une classe
=> php artisan livewire:make Editclasse

Partie les éléves

création de la base de donnée
=> php artisan make:model Student -m
composant liste eleve
=>php artisan livewire:make ListeEleve
composant create éleve
=> php artisan livewire:make CreateEleve
composant editer un éléve
=> php artisan livewire:make EditEleve
