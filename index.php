<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>PHP Ajax dischi</title>
</head>
<body>
    <div id="app">
        <header>
            <img src="assets/img/logo-small_2.png" alt="logo_img">
        </header>
        
        <main>
            <div class="card-area">
                <div class="card"
                v-for="(album, index) in myArr" :key="index">
                    <ul>
                        <li>
                            <a href="#">
                                <img :src="album.poster">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>
                                    {{ album.title }}
                                </h2>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h3>
                                    {{ album.author }}
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h4>
                                    {{ album.year }}
                                </h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>       
        </main>
    </div> 
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="script/script.js"></script>
</body>
</html>