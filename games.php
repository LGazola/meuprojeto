<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(
        "id" => 1,
        "title" => "Space Soldier Survival",
        "description" => "Space Soldier Surivival é um jogo de plataforma 2d cujo objetivo é a sobrevivência do nosso personagem, o Soldado Espacial. Após um pouso forçado em um planeta desconhecido ele terá que enfrentar alguns inimigos e outros obstaculos para conseguir seguir em frente com sua jornada. 
        O jogo contem uma mecanica e um mapa muito simples mas é capaz de divertir e desafiar o jogador.",
        "banner01" => "http://localhost/projetodois/imagens/bannerjogo.png",
        "banner02" => "http://localhost/VaporStore_web/img/banner_GhostOfTsushima.png",
        
        "screenShot01" => "img/gta-v.jpg",
        "screenShot02" => "BASE",
        "screenShot03" => "BASE",
        "screenShot04" => "BASE",
        "video01" => "BASE",
        "category" => "Ação",
        "promo" => "25,00",
        "promoLabel" => "promoLabel",

        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",
        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "creator" => "SrVertex",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator."
    );

    $game[2] = array(
        "id" => 2,
        "title" => "Roc",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "banner01" => "http://localhost/VaporStore_web/img/banners/banner_ResidentEvil.jpg",
        "banner02" => "http://localhost/VaporStore_web/img/banner_ResidentEvil.png",
        
        "screenShot01" => "img/gta-v.jpg",
        "screenShot02" => "BASE",
        "screenShot03" => "BASE",
        "screenShot04" => "BASE",
        "video01" => "BASE",
        "category" => "Ação",
        "promo" => "",
        "promoLabel" => "",
        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",
        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "creator" => "SrVertex",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator."
    );

    $game[3] = array(
        "id" => 3,
        "title" => "Rocket On The Rocks",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "banner01" => "http://localhost/VaporStore_web/img/banners/banner_Cyberpunk.jpg",
        "banner02" => "http://localhost/VaporStore_web/img/banner_Cyberpunk.png",

        "screenShot01" => "img/gta-v.jpg",
        "screenShot02" => "BASE",
        "screenShot03" => "BASE",
        "screenShot04" => "BASE",
        "video01" => "BASE",
        "category" => "Ação",
        "promo" => "",
        "promoLabel" => "",
        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",
        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "creator" => "SrVertex",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator.",
    );
















    echo json_encode($game);



?>

