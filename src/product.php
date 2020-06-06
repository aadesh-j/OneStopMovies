<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="stylesdevops.css" rel="stylesheet" type="text/css"/> 
</head>


<body>
    <div class="container">
        <img id="product_logo" src="images/logo.png" alt="pdlogo" />
        <h1 class="product_name"> One Stop Movies </h1>
    </div>
    <div class="container">
        <h1> Product Page</h1>
        <br />
    </div>
    
    <div class="container">
        <img src="https://lh3.googleusercontent.com/proxy/0SR3oaM1eaBt8mT-3iGyNUkJoz8OTMC5BeiYPmKy-dXM2H7atOsCcFZOnoBY3BRyqhyFZCybziNb6fV71j4ZnlS9rgkLxHWhBV9SDDpq1KX09ADRu2r-dmrYCvaerP-OyBjtHx7vR-5SLRxcD3KlBVrhWg" 
        alt="Aeronauts" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> The Aeronauts (2019)</h2>
        <p><b> PG-13, 1 hr 41 min </b></p>
        <p>In 1862, daredevil balloon pilot Amelia Wren (Felicity Jones) teams up with pioneering meteorologist James Glaisher (Eddie Redmayne) to advance human knowledge of the weather and fly higher than anyone in history. While breaking records and advancing scientific discovery, their voyage to the very edge of existence helps the unlikely pair find their place in the world they have left far below them. But they face physical and emotional challenges in the thin air, as the ascent becomes a fight for survival.</p>
        <p><b>Cast:</b> Eddie Redmayne, Felicity Jones, Tom Courtenay, Tim McInnerny, Vincent Perez, Anne Reid, Phoebe Fox, Rebecca Front</p>
        <p><b>Director:</b> Tom Harper</p>
        <p><b>Genres:</b> Action, Adventure, Biography, Drama, Thriller</p>
    </div>
    <div id="result"></div>
    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts1">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts1" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts1home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts1menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts1home" class="tab-pane fade in active">
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts1menu1" class="tab-pane fade">
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button id="aeronautsH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village1">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village1" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village1home">Today</a></li>
                            <li><a data-toggle="tab" href="#village1menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village1home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'"> 7:30 PM</button>
                            </div>
                            <div id="village1menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info"  id="aeronautsV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="https://m.media-amazon.com/images/M/MV5BOTdmNTFjNDEtNzg0My00ZjkxLTg1ZDAtZTdkMDc2ZmFiNWQ1XkEyXkFqcGdeQXVyNTAzNzgwNTg@._V1_.jpg" 
        alt="1917" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> 1917 (2019)</h2>
        <p><b> R, 1 hr 59 min</b></p>
        <p> At the height of the First World War, two young British soldiers, Schofield (Captain Fantastics George MacKay) and Blake (Game of Thrones Dean-Charles Chapman) are given a seemingly impossible mission. In a race against time, they must cross enemy territory and deliver a message that will stop a deadly attack on hundreds of soldiersBlakes own brother among them</p>
        <p><b>Cast:</b>  Benedict Cumberbatch, Andrew Scott, George MacKay, Mark Strong, Colin Firth, Richard Madden, Dean-Charles Chapman</p>
        <p><b>Director:</b> Sam Mendes</p>
        <p><b>Genres:</b> Drama, War</p>
    </div>
    
    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts2">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts2" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts2home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts2menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts2home" class="tab-pane fade in active">
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts2menu1" class="tab-pane fade">
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button id="nineteenseventeenH" type="button" class="btn btn-info" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village2">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village2" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village2home">Today</a></li>
                            <li><a data-toggle="tab" href="#village2menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village2home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'"> 7:30 PM</button>
                            </div>
                            <div id="village2menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'"> 5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info"  id="nineteenseventeenV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="https://lumiere-a.akamaihd.net/v1/images/star-wars-the-rise-of-skywalker-theatrical-poster-1000_ebc74357.jpeg?region=0%2C0%2C891%2C1372&width=480" 
        alt="starwars" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> Star Wars: The Rise of Skywalker (2019) </h2>
        <p><b> PG-13, 2 hr 22 min</b></p>
        <p> The surviving Resistance faces the First Order once more in the final chapter of the Skywalker saga.</p>
        <p><b>Cast:</b> Domhnall Gleeson, Carrie Fisher, Mark Hamill, Oscar Isaac, Adam Driver, Daisy Ridley, John Boyega, Lupita Nyong'o </p>
        <p><b>Director:</b> J.J. Abrams</p>
        <p><b>Genres:</b>  Action, Adventure, Fantasy, Sci-Fi</p>
    </div>

    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts3">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts3" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts3home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts3menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts3home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts3menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsH" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village3">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village3" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village3home">Today</a></li>
                            <li><a data-toggle="tab" href="#village3menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village3home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">7:30 PM</button>
                            </div>
                            <div id="village3menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info"  id="starwarsV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="https://m.media-amazon.com/images/M/MV5BMGUwZjliMTAtNzAxZi00MWNiLWE2NzgtZGUxMGQxZjhhNDRiXkEyXkFqcGdeQXVyNjU1NzU3MzE@._V1_UY1200_CR90,0,630,1200_AL_.jpg" 
        alt="knviesout" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> Knives Out (2019)</h2>
        <p><b> PG-13, 2 hr 10 min</b></p>
        <p> When renowned crime novelist Harlan Thrombey (Christopher Plummer) is found dead at his estate just after his 85th birthday, the inquisitive and debonair Detective Benoit Blanc (Daniel Craig) is mysteriously enlisted to investigate. From Harlan's dysfunctional family to his devoted staff, Blanc sifts through a web of red herrings and self-serving lies to uncover the truth behind Harlan's untimely death.</p>
        <p><b>Cast:</b> Toni Collette, Daniel Craig, Michael Shannon, Jamie Lee Curtis, Christopher Plummer, Chris Evans, Ana de Armas, Lakeith Stanfield </p>
        <p><b>Director:</b>  Rian Johnson</p>
        <p><b>Genres:</b> Comedy, Crime, Drama, Mystery, Thriller</p>
    </div>

    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts4">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts4" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts4home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts4menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts4home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts4menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutH" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village4">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village4" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village4home">Today</a></li>
                            <li><a data-toggle="tab" href="#village4menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village4home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">7:30 PM</button>
                            </div>
                            <div id="village4menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info"  id="knivesoutV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="https://m.media-amazon.com/images/M/MV5BYmM4YzA5NjUtZGEyOS00YzllLWJmM2UtZjhhNmJhM2E1NjUxXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg" 
        alt="justmercy" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> Just Mercy (2019)</h2>
        <p><b> PG-13, 2 hr 16 min</b></p>
        <p> Just Mercy shadows world-renowned civil rights defense attorney Bryan Stevenson as he recounts his experiences and details the case of a condemned death row prisoner whom he fought to free.</p>
        <p><b>Cast:</b>  Michael B. Jordan, Brie Larson, Jamie Foxx, Tim Blake Nelson, Rafe Spall, O'Shea Jackson Jr.</p>
        <p><b>Director:</b> Destin Daniel Cretton</p>
        <p><b>Genres:</b> Drama</p>
    </div>

    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts5">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts5" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts5home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts5menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts5home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts5menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyH" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village5">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village5" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village5home">Today</a></li>
                            <li><a data-toggle="tab" href="#village5menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village5home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">7:30 PM</button>
                            </div>
                            <div id="village5menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info"  id="justmercyV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <img src="https://m.media-amazon.com/images/M/MV5BNDU4Mzc3NzE5NV5BMl5BanBnXkFtZTgwMzE1NzI1NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg" 
        alt="detectivepikachu" height="422px" width="270px" style="float: left; clear: left; margin-right: 5%;">
        <h2> Pokemon Detective Pikachu (2019)</h2>
        <p><b> PG, 1 hr 44 min</b></p>
        <p> The world of Pokemon comes to life! The first-ever live-action Pokemon movie, POKMON Detective Pikachu stars Ryan Reynolds as the titular character in the first-ever live-action movie based on the iconic face of the global Pokmon brandone of the worlds most popular, multi-generation entertainment properties and most successful media franchises of all time. Fans everywhere can now experience Pikachu on the big screen as never before, as a talking detective Pikachu, a Pokmon like no other.</p>
        <p><b>Cast:</b> Ryan Reynolds, Ken Watanabe, Bill Nighy, Suki Waterhouse, Rita Ora, Kathryn Newton </p>
        <p><b>Director:</b> Rob Letterman</p>
        <p><b>Genres:</b> Adventure, Animation, Comedy, Family, Fantasy, Sci-Fi</p>
    </div>

    <div class="container">
        <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#hoyts6">Hoyts</a>
                    </h4>
                </div>
                <div id="hoyts6" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#hoyts6home">Today</a></li>
                            <li><a data-toggle="tab" href="#hoyts6menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="hoyts6home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">3:00 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">7:00 PM</button>
                            </div>
                            <div id="hoyts6menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">5:00 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">7:00 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuH" onClick="window.location='snacks.php'">9:00 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" href="#village6">Village Cinemas</a>
                    </h4>
                </div>
                <div id="village6" class="panel-collapse collapse">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#village6home">Today</a></li>
                            <li><a data-toggle="tab" href="#village6menu1">Tomorrow</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="village6home" class="tab-pane fade in active">
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">3:30 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">7:30 PM</button>
                            </div>
                            <div id="village6menu1" class="tab-pane fade">
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">5:30 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">7:30 PM</button>
                                <button type="button" class="btn btn-info" id="pikachuV" onClick="window.location='snacks.php'">9:30 PM</button>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>
</body>
<center>

<a href="Contact.php">Contact Us</a>

</center>
</html>