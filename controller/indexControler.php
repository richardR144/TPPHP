<?php 


$articles = [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Robert'
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => false,
        'author' => 'David Douillet'
    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Trezeguet'
    ]
];

function isStringTooLong($stringToCheck) {
	return mb_strlen($stringToCheck, 'UTF-8') > 20;
}


function shortenString($stringToCut) {
	return substr($stringToCut, 0, 20);
}
// fonction qui check les "@", si il y a un nom de taper, etc...

// 
// var_dump($articles);
// var_dump($_SERVER);
