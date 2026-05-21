<?php
require_once 'models/Formation.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header('Location: index.php?page=formations');
    exit();
}

$formation = Formation::getById($id);

if (!$formation) {
    header('Location: index.php?page=formations');
    exit();
}

$programmes = [
    1 => [
        'modules' => [
            ['num' => '01', 'titre' => 'Introduction à l\'IA',    'desc' => 'Histoire, définitions, domaines d\'application de l\'intelligence artificielle.', 'duree' => '4h'],
            ['num' => '02', 'titre' => 'Python pour l\'IA',       'desc' => 'Bases du langage Python : variables, fonctions, bibliothèques NumPy et Pandas.',   'duree' => '6h'],
            ['num' => '03', 'titre' => 'Machine Learning',        'desc' => 'Régression linéaire, classification, arbres de décision avec Scikit-learn.',        'duree' => '10h'],
            ['num' => '04', 'titre' => 'Réseaux de neurones',     'desc' => 'Architecture des réseaux, backpropagation, introduction à TensorFlow.',             'duree' => '12h'],
            ['num' => '05', 'titre' => 'Projet final',            'desc' => 'Réalisation d\'un projet complet de A à Z avec jeu de données réel.',               'duree' => '8h'],
        ],
        'objectifs' => ['Maîtriser les algorithmes de Machine Learning', 'Développer des modèles de réseaux de neurones', 'Analyser et préparer des données', 'Déployer un modèle IA'],
        'prerequis'  => 'Bases en programmation recommandées',
        'debouches'  => 'Data Scientist, Ingénieur IA, Analyste ML',
    ],
    2 => [
        'modules' => [
            ['num' => '01', 'titre' => 'Introduction à la Data Science', 'desc' => 'Rôle du data scientist, cycle de vie des données, outils du métier.',          'duree' => '3h'],
            ['num' => '02', 'titre' => 'Python & Pandas',                'desc' => 'Manipulation de DataFrames, nettoyage et transformation des données.',          'duree' => '8h'],
            ['num' => '03', 'titre' => 'Visualisation',                  'desc' => 'Création de graphiques avec Matplotlib et Seaborn, storytelling data.',         'duree' => '7h'],
            ['num' => '04', 'titre' => 'Statistiques appliquées',        'desc' => 'Statistiques descriptives, corrélations, tests d\'hypothèse.',                  'duree' => '8h'],
            ['num' => '05', 'titre' => 'Projet d\'analyse',              'desc' => 'Analyse complète d\'un dataset réel avec rapport de conclusions.',              'duree' => '9h'],
        ],
        'objectifs' => ['Analyser des données complexes avec Python', 'Créer des visualisations percutantes', 'Appliquer des méthodes statistiques', 'Produire des rapports data'],
        'prerequis'  => 'Notions de mathématiques de base',
        'debouches'  => 'Data Analyst, Business Analyst, Data Scientist Junior',
    ],
    3 => [
        'modules' => [
            ['num' => '01', 'titre' => 'HTML & CSS avancé',  'desc' => 'Flexbox, Grid, responsive design, bonnes pratiques sémantiques.',          'duree' => '8h'],
            ['num' => '02', 'titre' => 'JavaScript',         'desc' => 'DOM, événements, fetch API, manipulation dynamique des pages.',             'duree' => '10h'],
            ['num' => '03', 'titre' => 'PHP & MySQL',        'desc' => 'Programmation serveur, PDO, requêtes SQL, sécurité.',                       'duree' => '14h'],
            ['num' => '04', 'titre' => 'Architecture MVC',   'desc' => 'Patron Modèle-Vue-Contrôleur, routeur central, séparation des couches.',    'duree' => '10h'],
            ['num' => '05', 'titre' => 'Projet Full Stack',  'desc' => 'Développement d\'une application web complète de bout en bout.',            'duree' => '8h'],
        ],
        'objectifs' => ['Créer des interfaces web modernes', 'Développer un backend PHP sécurisé', 'Maîtriser les bases de données MySQL', 'Appliquer l\'architecture MVC'],
        'prerequis'  => 'Aucun prérequis technique',
        'debouches'  => 'Développeur Web, Intégrateur, Freelance Web',
    ],
    4 => [
        'modules' => [
            ['num' => '01', 'titre' => 'Fondamentaux sécurité', 'desc' => 'Menaces, vulnérabilités, CIA Triad, cadres légaux et éthiques.',          'duree' => '6h'],
            ['num' => '02', 'titre' => 'Réseaux & protocoles',  'desc' => 'TCP/IP, DNS, HTTP, firewalls, VPN, analyse de trafic.',                   'duree' => '8h'],
            ['num' => '03', 'titre' => 'Tests d\'intrusion',    'desc' => 'Méthodologie pentest, Kali Linux, Nmap, Metasploit.',                     'duree' => '12h'],
            ['num' => '04', 'titre' => 'Sécurité applicative',  'desc' => 'OWASP Top 10, injections SQL, XSS, CSRF, sécurisation PHP.',             'duree' => '10h'],
            ['num' => '05', 'titre' => 'Rapport & veille',      'desc' => 'Rédaction de rapports d\'audit, veille sécurité, certifications.',       'duree' => '9h'],
        ],
        'objectifs' => ['Identifier et exploiter des vulnérabilités', 'Sécuriser des applications web', 'Maîtriser les outils de pentest', 'Rédiger des rapports d\'audit'],
        'prerequis'  => 'Connaissances réseaux souhaitées',
        'debouches'  => 'Pentesteur, Analyste SOC, Consultant Sécurité',
    ],
];

$prog = $programmes[$formation['id']] ?? [
    'modules'   => [],
    'objectifs' => [],
    'prerequis' => 'Non spécifié',
    'debouches' => 'Non spécifié',
];

$niveauClass = match($formation['niveau']) {
    'Débutant'      => 'badge-green',
    'Intermédiaire' => 'badge-orange',
    'Avancé'        => 'badge-red',
    default         => 'badge-gray'
};

require 'views/formation_detail.php';
?>