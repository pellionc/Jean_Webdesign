<?php

function getAllPhotos(): array {
    $liste_photos[0] = [
    "titre" => "Mes vacances à la montagne",
    "image" => "mini_1.jpg",
    "nb_likes" => 24,
    "categorie" => "maison",
    "tags" => ["bois", "montagne"],
    "date_creation" => new DateTime("2017-01-18")
];

$liste_photos[1] = [
    "titre" => "Un renard",
    "image" => "mini_2.jpg",
    "nb_likes" => 55,
    "categorie" => "animaux",
    "tags" => ["renard", "nature"],
    "date_creation" => new DateTime("2017-01-12")
];

$liste_photos[2] = [
    "titre" => "Un vélo",
    "image" => "mini_3.jpg",
    "nb_likes" => 12,
    "categorie" => "sport",
    "tags" => [],
    "date_creation" => new DateTime("2017-01-12")
];

return $liste_photos;
}