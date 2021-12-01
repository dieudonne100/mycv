<?php require "information.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LIBAWO DIEUDONNE ">
    <meta name="description" content="LIBAWO CV">
    <link href="styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title> libawo</title>
</head>
<body>
    <div class="parant">
        
  
    <div class="container">
        <div id="left_panel">
            <section id="profil" style="background-image: url('../img/imgback.jpg');">
                <div class="profil_bg">
                    <div class="searchbar">
                        <i class="fas fa-bars fa-2x"></i>

                        <input type="text" placeholder="Besion d'un chef de projet?" class="borderless">
 
                        <div class="search_bar_right_icon">
                            <i class="fas fa-search"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="24" height="24"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#95a5a6"><path d="M78.83333,14.33333v143.33333h14.33333v-143.33333z"></path></g></g>
                            </svg>
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    
                    <div class="userInfo">
                        <img src="../img/imgprofile.jpg" class="profil_img">
                        <div class="user_txt">
                            <h1><?php echo $profiler_info["userName"] ?></h1>
                            <P><?php echo $profiler_info["profession"] ?></P>
                        </div>
                    </div>
                    
                    <div class="absolute_img">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="80" height="80"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,109.22c-12.82405,0 -23.22,-10.39595 -23.22,-23.22v0c0,-12.82405 10.39595,-23.22 23.22,-23.22v0c12.82405,0 23.22,10.39595 23.22,23.22v0c0,12.82405 -10.39595,23.22 -23.22,23.22z" fill="#ffffff"></path><g fill="#e34856"><path d="M86,22.704c-34.90362,0 -63.296,28.39238 -63.296,63.296c0,34.90362 28.39238,63.296 63.296,63.296c34.90362,0 63.296,-28.39238 63.296,-63.296c0,-34.90362 -28.39238,-63.296 -63.296,-63.296zM105.264,88.752h-16.512v16.512c0,1.52186 -1.23014,2.752 -2.752,2.752c-1.52186,0 -2.752,-1.23014 -2.752,-2.752v-16.512h-16.512c-1.52186,0 -2.752,-1.23014 -2.752,-2.752c0,-1.52186 1.23014,-2.752 2.752,-2.752h16.512v-16.512c0,-1.52186 1.23014,-2.752 2.752,-2.752c1.52186,0 2.752,1.23014 2.752,2.752v16.512h16.512c1.52186,0 2.752,1.23014 2.752,2.752c0,1.52186 -1.23014,2.752 -2.752,2.752z"></path></g></g>
                        </svg>
                    </div>
                </div>
            </section>
            
            <section id="about">
                <div id="item-1" class="about_item">
                     <img src="/img/cake.png"/>
                    <div class="about_item_text">
                        <p><?php echo $profiler_info["Date_naiss"] ?></p>
                        <p><?php echo $profiler_info["Origine"] ?></p>
                        <p><?php echo $profiler_info["Status"] ?> - Sante <?php echo $profiler_info["RasStatus"] ?></p>
                    </div>
                </div>

                <div id="item-2" class="about_item">
                     <img src="/img/location.png"/>
                    <div class="about_item_text">
                        <p>Resident a <?php echo $profiler_info["quatiere"] ?></p>   
                        <p><?php echo $profiler_info["ville"] ?> - <?php echo $profiler_info["pays"] ?></p> 
                        <p>Map: 
                            <small>
                                <?php echo $profiler_info["Map1"] ?>, 
                                <?php echo $profiler_info["Map2"] ?>
                            </small>
                        </p> 
                    </div>
                </div>

                <div id="item-3" class="about_item">
                     <img src="/img/tel.png"/>
                    <div class="about_item_text">
                        <p><?php echo $profiler_info["tel"] ?></p>
                        <small><?php echo $profiler_info["telDesc"] ?></small> 
                    </div>
                </div>
                
                <div id="item-4" class="about_item">
                    <img src="/img/email.png"/>
                    <div class="about_item_text">
                        <p><?php echo $profiler_info["email"] ?></p>
                        <small><?php echo $profiler_info["emailDesc"] ?></small>  
                    </div>
                </div>

                <div id="item-5" class="about_recap">
                    <a href="#" style="border-bottom: 3px solid #D90000; with: 30px;">+<?php echo $profiler_info["projectCount"] ?> <?php echo $about_recap["PROJETS"] ?> </a>
                    <a href="#">+<?php echo $profiler_info["contractCount"] ?> <?php echo $about_recap["CONTRATS"] ?> </a>
                    <a href="#"><?php echo $profiler_info["expCount"] ?> <?php echo $about_recap["ANSEXP"] ?> </a>
                </div>

            </section>
            
            <section id="skills">
                <div class="skill_item">
                    <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"/>
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill1"]["title"] ?></h2>
                                <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>
                        <p><?php echo $profiler_skills["skill1"]["desc"] ?></p>    
                        <div class="skill-bar">
                            <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill1"]["level"] ?>%;">
                            </div>
                            <div class="endball"></div>
                        </div>            
                    </div>
                </div>
                
                <div class="skill_item">
                    <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;" style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;" />
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill2"]["title"] ?></h2>
                               <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>        
                        <p><?php echo $profiler_skills["skill2"]["desc"] ?></p>
                        <div class="skill-bar">
                            <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill2"]["level"] ?>%;">
                            </div>
                            <div class="endball"></div>
                        </div>
                    </div>
                </div>
                
                <div class="skill_item">
                 <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"/>
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill3"]["title"] ?></h2>
                                <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>
                            <p><?php echo $profiler_skills["skill3"]["desc"] ?></p>
                            <div class="skill-bar">
                                <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill3"]["level"] ?>%;">
                                </div>
                                <div class="endball"></div>
                            </div>        
                    </div>
                </div>
                
                <div class="skill_item">
                    <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"/>
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill4"]["title"] ?></h2>
                                <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>        
                        <p><?php echo $profiler_skills["skill4"]["desc"] ?></p>
                        <div class="skill-bar">
                            <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill4"]["level"] ?>%;">
                            </div>
                            <div class="endball"></div>
                        </div>
                    </div>
                </div>
                
                <div class="skill_item">
                     <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"/>
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill5"]["title"] ?></h2>
                                <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>
                        <p><?php echo $profiler_skills["skill5"]["desc"] ?></p>
                        <div class="skill-bar">
                            <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill5"]["level"] ?>%;">
                            </div>
                            <div class="endball"></div>
                        </div>        
                    </div>
                </div>
                
                <div class="skill_item">
                    <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"  style=" height: 40px;width: 40px;"/>
                    <div class="item_content">
                        <div class="item_top">
                            <h2><?php echo $profiler_skills["skill6"]["title"] ?></h2>
                            <img src="/img/Star.png" style=" height: 20px;width: 20px;" alt="">
                        </div>
                        <p><?php echo $profiler_skills["skill6"]["desc"] ?></p>
                        <div class="skill-bar">
                            <div id="backend" class="skill-fill" style="width: <?php echo $profiler_skills["skill6"]["level"] ?>%;">
                            </div>
                            <div class="endball"></div>
                        </div>            
                    </div>
                </div>
                
            </section>
    
        </div>

        <div id="right_panel">
            <section id="pro_exp">
                <div class="pro_exp_head">
                    <div class="pro_head_start">
                       
                        <img src="/img/batiment.png" with="35px" height="35px"/>
                        <div class="pe_head_txt">
                            <h1><?php echo $entete["entetefirst"]["Exppr"] ?></h1>
                            <i><?php echo $entete["entetesecond"]["Expertise"] ?></i>
                        </div>
                    </div>
                    <div class="menuIcon">
                       
                        <img src="/img/menu.png" with="35px" height="35px"/>

                    </div>
                </div>
                <div class="pro_exp_body">
                    <div class="pe_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_exps['experience1']['jobTitle'] ?> - <b>
                            <?php echo $profiler_exps['experience1']['companyName'] ?></b></p>
                        <p class="duration">De <?php echo $profiler_exps['experience1']['startDate'] ?> a 
                            <?php echo $profiler_exps['experience1']['endDate'] ?> - 
                            <?php echo $profiler_exps['experience1']['companySite'] ?></p>
                        <p class="realisation"><?php echo $profiler_exps['experience1']['jobDesc'] ?></p>
                    </div>
                    <div class="pe_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_exps['experience2']['jobTitle'] ?> - <b>
                            <?php echo $profiler_exps['experience2']['companyName'] ?></b></p>
                        <p class="duration">De <?php echo $profiler_exps['experience2']['startDate'] ?> a 
                            <?php echo $profiler_exps['experience2']['endDate'] ?> - 
                            <?php echo $profiler_exps['experience2']['companySite'] ?></p>
                        <p class="realisation"><?php echo $profiler_exps['experience2']['jobDesc'] ?></p>
                    </div>
                    <div class="pe_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_exps['experience3']['jobTitle'] ?> - <b>
                                <?php echo $profiler_exps['experience3']['companyName'] ?></b></p>
                        <p class="duration">De <?php echo $profiler_exps['experience3']['startDate'] ?> a 
                            <?php echo $profiler_exps['experience3']['endDate'] ?> - 
                            <?php echo $profiler_exps['experience3']['companySite'] ?></p>
                        <p class="realisation"><?php echo $profiler_exps['experience3']['jobDesc'] ?></p>
                    </div>
                    <div class="pe_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_exps['experience4']['jobTitle'] ?> - <b>
                                <?php echo $profiler_exps['experience4']['companyName'] ?></b></p>
                        <p class="duration">De <?php echo $profiler_exps['experience4']['startDate'] ?> a 
                            <?php echo $profiler_exps['experience4']['endDate'] ?> - 
                            <?php echo $profiler_exps['experience4']['companySite'] ?></p>
                        <p class="realisation"><?php echo $profiler_exps['experience4']['jobDesc'] ?></p>
                    </div>
                    <div class="pe_item">
                        <p style="font-size: 25px; "> <?php echo $profiler_exps['experience5']['jobTitle'] ?> - <b>
                                <?php echo $profiler_exps['experience5']['companyName'] ?></b></p>
                        <p class="duration">De <?php echo $profiler_exps['experience5']['startDate'] ?> a 
                            <?php echo $profiler_exps['experience5']['endDate'] ?> - 
                            <?php echo $profiler_exps['experience5']['companySite'] ?></p>
                        <p class="realisation"><?php echo $profiler_exps['experience5']['jobDesc'] ?></p>
                    </div>
                </div>
            </section>

            <section id="pi_lang">
                <section id="intrest">
                    <div class="int_head">
                        <h1> <?php echo $entete["entetefirst"]["Pointint"] ?></h1>
                        <i><?php echo $entete["entetesecond"]["Passetemps"] ?></i>
                    </div>
                    <div class="int_body">
                        <img src="../img/eFootball-PES-2021.jpg" width="90px" height="50px">
                        <img src="../img/logo-stackoverflow.png" width="100px" height="50px">
                        <img src="../img/Screenshot 2021-11-23 043215.png" width="90px" height="50px">
                        <img src="../img/692px-Criminal-Minds.svg.png" width="100px" height="50px">
                        <img src="../img/pl.png" width="100px" height="50px">
                        <img src="../img/danse.png" width="100px" height="50px">
                        <img src="../img/guiness.png" width="100px" height="50px">
                    </div>
                </section>
                
                <section id="lang">
                    <div class="lang_head">
                        <h1><?php echo $entete["entetefirst"]["Langues"] ?></h1>
                        <i><?php echo $entete["entetesecond"]["Pratiqueentre"]?> </i>
                    </div>
                    <div class="lang_body">
                        <div class="lang_item">
                            <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"/>
                             <p><?php echo $profiler_info["langue1"] ?></p>
                        </div>
                        <div class="lang_item">
                           <img src="/img/tick_box_50px.png"  style=" height: 40px;width: 40px;"/>
                            <p><?php echo $profiler_info["langue2"] ?></p>
                        </div>
                    </div>
                </section>

            </section>

            <section id="academic">
                <div class="academic_head">
                    <div class="academic_head_start">
                        <img src="/img/chapeau.png"/>       
                        <div class="academic_head_txt">
                            <h1> <?php echo $entete["entetefirst"]["Curac"] ?></h1>
                            <i> <?php echo $entete["entetesecond"]["Diplomesfor"] ?></i>
                        </div>
                    </div>
                    <div class="menuIcon">
                        <img src="/img/menu.png"  style="margin: rigth -40px;"/>       

                    </div>
                </div>
                <div class="academic_body">
                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique1']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique1']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique1']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique1']['desc'] ?></i></span>
                        </p>
                    </div>
                    
                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique2']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique2']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique2']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique2']['desc'] ?></i></span>
                        </p>
                    </div>

                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique3']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique3']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique3']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique3']['desc'] ?></i></span>
                        </p>
                    </div>

                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique4']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique4']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique4']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique4']['desc'] ?></i></span>
                        </p>
                    </div>

                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique5']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique5']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique5']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique5']['desc'] ?></i></span>
                        </p>
                    </div>

                    <div class="academic_item">
                        <p style="font-size: 25px;"> <?php echo $profiler_academic['academique6']['diploma'] ?> - 
                        <b>@<?php echo $profiler_academic['academique6']['school'] ?></b></p>
                        <p>
                            <span class="duration"><?php echo $profiler_academic['academique6']['time'] ?>
                            </span> - <span class="desciption">
                            <i><?php echo $profiler_academic['academique6']['desc'] ?></i></span>
                        </p>
                    </div>

                </div>
            </section>
        </div>
    </div>
      </div>
</body>
</html>