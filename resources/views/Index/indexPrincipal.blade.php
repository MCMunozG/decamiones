<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexPrincipal.css".css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Favicon ICON de la web -->
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20240610/original/pngtree-free-shipping-truck-png-image_15294889.png">
        <title>DeCamiones</title>
</head>
<body>

    <style> 
    
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

    /* Variables de entorno a usar en el proyecto como su color y su fuente */
    :root {
        /* Fuentes */
        --font-title: 'Bebas Neue', sans-serif;  /* Fuente llamativa para títulos */
        --font-body: 'Roboto', sans-serif;       /* Fuente limpia para párrafos */

     /* Colores de la paleta */
        --color-dark-gray: #333333;  /* Gris oscuro */
        --color-medium-gray: #666666; /* Gris medio */
        --color-light-gray: #ececec;  /* Gris claro */
        --color-white: #FFFFFF;      /* Blanco */
        --color-bluesuave: #4A90E2;       /* Azul suave */
        --color-bluemenosuave: #4d99f0;       /* Azul suave */
        --color-blueoscuro: #245c9b;       /* Azul suave */
        --color-green: #A3D39C;      /* Verde pastel */
        --color-red: #Frgb(107, 155, 100)       /* Rojo suave */
    }
    /* Estilos generales (para pantallas grandes, escritorio) */
    body {
        height: auto;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        overflow-x: hidden;
    }

    /* Media Query para dispositivos móviles (menos de 768px) */
    @media (max-width: 768px) {

       /*  SECCION SOLO PARA PC */
        .sectionPatrocinadores, .containerImagefooter{
            display: none;
        }

        .firstSection {
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 4% 20% 76%;
            position: relative;
            
            .containeHead{
                border-bottom: 1px solid var(--color-medium-gray);
                background-color: var(--color-bluemenosuave);
                display: flex;
                justify-content: center;
                align-items: center;

                .txtBanner{
                    font-size: 2.5vw;
                    color: var(--color-light-gray);
                    letter-spacing: 1.5px;
                    font-weight: bold;

                }
            }

            .containerMenunav{
                height: 100%;
                width: 100%;
            
                .sendSolicitud{
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 1fr;
                    
                    .containerNomapp{
                        height: 100%;
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr;
                        grid-template-rows: 65% 1fr;
        
                        .infoSolictud{
                            display: flex;
                            width: 100vw;

                            .containerSoicitud{
                                display: flex;
                                flex: 1;
                            }

                            .Up{
                                width: 100vw;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                

                                .nomApp{
                                    font-family: var(--font-body);
                                    font-size: 6vw;
                                    color: var(--color-dark-gray);
                                    padding-left: 3.5vw;
                                }


                                .iconInteres{
                                    display: flex;
                                    justify-content: flex-end;
                                    align-items: center;
                                    margin-right: 2vw;

                                    li{
                                        display: none;
                                    }

                                    
                                    i{
                                        color: var(--color-blueoscuro);
                                        padding-right: 5vw;
                                        font-size: 4vw;
                                    }
                                }
                            }

                           /*  CONTENEDOR DE PC */
                            #containerLogin{
                                display: none;
                            }

                            .Down{
                                width: 100%;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                background-color: var(--color-light-gray);
                                padding-left: 4vw;
                                                

                                .nomInput{
                                    font-family: var(--font-body);
                                    font-size: 2.65vw;
                                    color: var(--color-medium-gray);
                                    padding-left: 1vw;
                                }

                                .groupInput{
                                    width: 25vw;
                                    height: 4vh;
                                    background-color: transparent;
                                    border: none;
                                    border-bottom: 1px solid black;
                                    border-radius: 0px 0px 2px 0px;
                                    outline: none;
                                }


                                .shearchCamion{
                                    border: 1px solid black;
                                    height: 7.5vh;
                                    width: 22vw;
                                    border-radius: 3px;
                                    margin-left: 1.5vw;
                                    text-align: center;
                                    background-color: var(--color-blueoscuro);
                                    color: var(--color-light-gray);
                                    font-weight: bold;
                                    border: none;
                                }
                            }
                        }

                        #containerFilter{
                            width: 94.5%;
                            height: 10vh;
                            background-color: var(--color-light-gray);
                            margin-left: 2.2vw;
                            border-radius: 8px;
                            box-shadow: 0px 0px 20px 0px  var(--color-medium-gray);

                            .rediretSesion{
                                display: none;
                            }

                            #containerCity{
                                display: none;
                            }
                        }
                    }
                }
            }

            .containerPresentation{
                margin-top: 55vw;
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw;
                height: 74%;
                overflow: hidden;

                .imageCamion{
                    width: 100%;
                    height: 100%;
                    object-fit: cover; /* Ajusta el video sin perder proporción */
                }
            }

            .containerMenunavscrolling{
                background-color: var(--color-blueoscuro);
                position: fixed;
                height: 6vh;
                width: 100vw;
                bottom: 0;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                gap: 2vw;
                border-radius: 15px 15px 0px 0px;
                z-index: 1;

                i{
                    color: var(--color-white);
                    font-size: 4.1vw;
                    cursor: pointer;
                }
            }

            #home{
                padding: 4%;
                background-color: var(--color-blueoscuro);
                color: var(--color-white);
                border: 2px solid var(--color-white);
                border-radius: 100%;
                margin-bottom: 30px;
            }

            /* CONTENEDOR DE PC */
            .socialMedia{
                display: none;
            }
        }

        .secondSection {
            height: 60vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            
            .containerOfert{
                height: 100%;
                width: 80%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden; 
                min-width: 96.7%;
                scroll-snap-type: x mandatory;
                gap: 8vw; 
                padding: 10px;
                -ms-overflow-style: none; 
                scrollbar-width: none; 
                margin: 0px 0px 0px 7px;

                .containerOfert::-webkit-scrollbar {
                    display: none; 
                }

                .camionCard{
                    height: 100%;
                    min-width: 95px;
                    max-width: 270px;
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 63% 0% 20% 8% 11%;
                    background-color: var(--color-light-gray);
                    border-radius: 3px;
                    overflow: hidden;
                    box-shadow: 0px 0px 15px 0px var(--color-medium-gray);
                    scroll-snap-align: start;
                    flex: 0 0 auto;
                
                
                    .camionUnited{
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    .containerName{
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        .nomCamion{
                            font-family: var(--font-body);
                            width: 70%;
                            height: 5vh;
                            font-size: 5vw;
                            text-align: center;
                            margin-top: -4vw;
                            border-radius: 10px;
                            padding-top: 3vw;
                            background-color: var(--color-light-gray);
                            border-left: 2px solid black;
                            border-right: 2px solid black;
                        }
                    }

                    .infoBasic{
                        height: 100%;
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-template-rows: 1fr;
                        padding-top: 8vw;

                        .infoCamion{
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: start;
                            text-align: left;
                            gap: 1vw;
                            border-right: 1px solid rgb(210, 210, 210);
                        
                            .nomInfo{
                                margin-left: 3vw;
                                font-size: 3VW;
                                font-family: var(--font-title);

                            }
                        }
                    }
                    
                    .nomAdmin{
                        text-align: center;
                        font-size: 3.3vw;
                        padding-top: 3.5vw;
                        font-family: var(--font-title);
                    }

                    .sendSolicitud{
                        height: 100%;
                        width: 100%;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;

                        .precioCamion{
                            font-size: 3.3vw;
                            padding-left: 5vw;
                        }

                        .separarCamion{
                            height: 4.1vh;
                            width: 35vw;
                            background-color: var(--color-blueoscuro);
                            border: none;
                            border-radius: 1px 0px 0px 1px;
                            color: var(--color-white);
                            font-family: var(--font-title);
                            font-weight: bold;
                        }
                    }
                }
            }
        }

        .thirdSection {
            margin-top: 10vw;
            height: 75vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;

            /* BANNER PARA PC EN RESOLUCION NO ES COMPATIBLE EL TAMAÑO A PANTALLA MOBILE */
            .containerBannerpc{
                display: none;
            }

            .containerBanner{
                display: block;
                height: 100%;
                width: 100%;

                .containerCarrusel {
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    position: relative;

                    /* Track que contiene las imágenes */
                    .carouselTrack {
                        display: flex;
                        width: 400%; /* 100% por cada imagen */
                        height: 100%;
                        position: relative;
                        animation: slide-carousel 20s infinite; /* 5s por imagen x 4 imágenes */
                    

                        /* Imágenes del carrusel */
                        .imageBanner {
                            width: 25%; /* 100% / 4 imágenes = 25% */
                            height: 100%;
                            flex-shrink: 0;
                            background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;
                        }
                    }
                }
            }
        }

        .fourthSection {
            height: 75vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            
            .contaierCategories{
                height: 100%;
                width: 95%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden; 
                min-width: 96.5%;
                scroll-snap-type: x mandatory;
                gap: 20px; 
                padding: 10px;
                -ms-overflow-style: none; 
                scrollbar-width: none; 
                margin: 0px 0px 0px 6px;

                .containerCamion{
                    position: relative;
                    height: 88%;
                    min-width: 100px;
                    max-width: 375px;
                    background-color: var(--color-light-gray);
                    border-radius: 3px;
                    overflow: hidden;
                    box-shadow: 0px 0px 20px 0px var(--color-medium-gray);
                    scroll-snap-align: start;
                    flex: 0 0 auto;
                    background-color: var(--color-dark-gray);

                    .imageCategories{
                        height: 100%;
                        width: 100%;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        opacity: .6;
                    }

                    .containerBtn{
                        position: absolute;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        bottom: 0;
                        height: 30%;
                        width: 100%;

                        .btnShearch{
                            height: 40%;
                            width: 65%;
                            border-radius: 8px;
                            border: none;
                            background-color: var(--color-white);
                            font-weight: bold;
                            font-size: 5vw;
                            font-family: var(--font-title);
                            letter-spacing: 3.5px;
                            margin-top: 5vw;
                        }
                    }

                    #categoriesTrasteos, #categoriesRemolque{
                        transform: scaleX(-1);
                    }
                }
            }
        }

        .fifthSection {
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            
            .containerInfo{
                position: relative;
                display: grid;
                grid-template-rows: 40% 1fr;
                grid-template-columns: 1fr;
                margin: 10px 50px 10px 50px;

                .containerinfoimage{
                    position: absolute;
                    left: 33%;
                    height: 40%;
                    width: 35%;

                    .imageInformation{
                        height: 100%;
                        width: 100%;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
                }

                .containerTxtinformation{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 140%;
                    width: 100%;
                    margin-top: 30vw;

                    .txtInformtation{
                        height: 100%;
                        width: 100%;
                        text-align: center;
                        font-family: var(--font-body);
                        font-size: 3.6vw;
                    }
                }
            }
        }

        .sixthSection {
            height: 55vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 75%;
            
            .containerFilter{
                width: 97%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-snap-type: x mandatory;
                gap: 10px;
                padding: 10px;
                -ms-overflow-style: none;
                scrollbar-width: none;
                white-space: nowrap; 
                    
                .containerFilter::-webkit-scrollbar {
                    display: none;
                }

                .containerOption{
                    height: 95%;
                    min-width: 600px; 
                    max-width: 100%;
                    border-radius: 5px;
                    scroll-snap-align: start;
                    flex-shrink: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 1vw;
                    padding: 5px;

                    .btnFilter{
                        width: 100%;
                        height: 5vh;
                        background-color: #f0f0f0;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        text-align: center;                
                        font-size: 3.5vw;
                        margin-left: 1.5vw;
                        font-family: var(--font-title);
                    } 

                    #optionTodos{
                        background-color: var(--color-blueoscuro);
                        color: var(--color-white);
                        border: none;
                    }
                }
            }

            .containerComments{
                width: 95%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-snap-type: x mandatory;
                gap: 10px;
                -ms-overflow-style: none;
                scrollbar-width: none;
                white-space: nowrap; 
                margin: 0px 0px 0px 10px;
                gap: 8vw;

                .commentsUnited{
                    height: 70%;
                    min-width: 280px; 
                    max-width: 20%;
                    border-radius: 5px;
                    scroll-snap-align: start;
                    flex-shrink: 0;
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 35% 55% 10%;
                    border-radius: 5px;
                    box-shadow: 0px 0px 10px 0px var(--color-medium-gray);
                    margin-left: 1vw;
                    background-color: var(--color-light-gray);
                    transition: .5s all;

                    .personComments{
                        display: grid;
                        grid-template-columns: 32% 68%;
                        margin-top: 2vw;
                        overflow: hidden;

                        .containerFotoperfil{
                            display: flex;
                            flex: 1;
                            margin-left: 2vw;

                            .fotoPerfil{
                                height: 8vh;
                                width: 100%;
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                border-radius: 100%;
                            }
                        }

                        .containerDatebasic{
                            display: grid;
                            grid-template-columns: 1fr;
                            grid-template-rows: 70% 30%;

                            .nomPerson{
                                font-family: var(--font-title);
                                text-align: start;
                                padding-top: 3vw;
                                padding-left: 2vw;
                                font-size: 5.5vw;
                            }

                            .dateComment{
                                text-align: end;
                                margin-right: 10vw;
                                font-family: var(--font-body);
                                font-size: 2.3vw;
                                color: var(--color-medium-gray);
                                margin-top: -2vw;
                            }
                        }
                    }

                    .txtComments{
                        padding: 10px;
                        width: 100%; 
                        max-width: 500px; 
                        word-wrap: break-word;
                        overflow: hidden;
                        text-align: left;

                        .txtPerson{
                            font-family: var(--font-body);
                            font-size: 3.5vw;
                            line-height: 1.2;
                            white-space: normal;
                        }
                    }

                    .iconComments{
                        display: flex;
                        justify-content: flex-end;
                        align-items: start;
                        gap: 1.3vw;
                        padding-right: 2vw;


                        i{
                            color: black;
                            font-size: 4vw;
                        }
                    }
                    
                    &:hover{
                        margin-top: -3vh;
                    }
                }
            }
        }

        .seventhSection {
            height: 45vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 20% 1fr 15% 8%;
            border-radius: 10px 10px 0px 0px;
            overflow: hidden;
            background-color: var(--color-blueoscuro);
        
            .containerInfofooter{
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 13vw;

                .containerInfofooter{
                    display: flex;
                    height: 100%;
                    width: 100%;
                    gap: 8vw;

                    .imgPatrocinador{
                        height: 4vh;
                        width: 10vw;
                    }
                }
            }
                
                .copyRigth{
                    font-size: 3.6vw;
                    text-align: center;
                    color: var(--color-white);
                }

                .containerQuestion{
                    height: 100%;
                    width: 100%;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: 1fr;
                    

                    .containerInfoquestion{
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: start;
                        gap: 7vw;
                        padding-left: 9vw;
                    
                        a{
                            color: var(--color-white);
                            text-decoration: none;
                            font-family: var(--font-body);
                            font-size: 3.3vw;
                        }
                    
                    }
                }

                #containerSocialmedia{
                    background-color: var(--color-white);

                    .containersocialMedia{
                        height: 100%;
                        width: 100%;
                        display: flex;
                        justify-content: space-evenly;
                        align-items: center;

                        i{
                            font-size: 4.5vw;
                            color: var(--color-blueoscuro);
                        }
                    }
                }

                        #containerPatrocinadores{
                            border-bottom: 1px solid white;
                        }
        }
    }

    /* Media Query para tablets (768px a 1024px) */
    @media (min-width: 768px) and (max-width: 1024px) {

    .firstSection {
            
            .containeHead{

            }

            .containerMenunav{

            }

            .containerPresentation{
                    
            }
        }

        .secondSection {
            
            .containerOfert{

                .camionCard{

                }
            }
        }

        .thirdSection {

            .containerBanner{

            }
        }

        .fourthSection {
            
            .contaierCategories{

            }
        }

        .fifthSection {
            

            .containerInfo{

            }
        }

        .sixthSection {
            

            .containerComments{
            
            }
        }

        .seventhSection {
        
            .containerInfofooter{
                
            }
        }
    }

    /* Media Query para pantallas grandes o escritorio (más de 1024px) */
    @media (min-width: 1025px) {

        .firstSection {
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 5vh 20vh 75vh;
       
            
            .containeHead{
                border-bottom: 1px solid var(--color-white);
                background-color: var(--color-blueoscuro);
                display: flex;
                justify-content: center;
                align-items: center;

                .txtBanner{
                    font-size: .6vw;
                    font-weight: bold;
                    color: var(--color-white);
                    font-family: var(--font-body);
                    letter-spacing: 2px;
                }
            }

            .containerMenunav{
                height: 100%;
                width: 100%;
            
                .sendSolicitud{
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 1fr;
                    
                    .containerNomapp{
                        height: 100%;
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr;
                        grid-template-rows: 65% 1fr;
        
                        .infoSolictud{
                            display: flex;
                            width: 100vw;

                            .containerSoicitud{
                                display: flex;
                                flex: 1;
                            }

                            .Up{
                                width: 100vw;
                                display: flex;
                                flex-direction: column;
                                justify-content: space-around;
                                align-items: center;

                                .nomApp{
                                    padding-top: 1.5vw;
                                    font-family: var(--font-title);
                                    font-size: 2.5vw;
                                    color: var(--color-dark-gray);
                                    padding-right: 22vw;
                                }

                                .iconInteres{
                                    margin-top: 1.9vw;
                                    margin-left: 15vw;
                                    display: flex;
                                    justify-content: flex-end;
                                    align-items: center;
                                    gap: 2vw;

                                    /* ICONOS SOLO PARA MOBILES */
                                    i{
                                        display: none;
                                    }

                                    li{
                                        list-style: none;
                                        display: flex;
                                        gap: 2vw;
                                                             
                                        #btnInicio{
                                            color: var(--color-bluemenosuave);
                                        }

                                        .optionNavpc{
                                            cursor: pointer;
                                            border: none;
                                            background-color: transparent;
                                            font-size: .85vw;
                                            font-family: var(--font-title);
                                        }
                                      
                                    }
                                }
                            }

                            .Down{
                                width: 20%;
                                height: 8vh;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                background-color: var(--color-light-gray);
                                padding-left: 1.5vw;
                                gap: .2vw;
                                border-right: 1px solid var(--color-medium-gray);
                                                

                                .nomInput{
                                    font-family: var(--font-body);
                                    font-size: .53vw;
                                    color: var(--color-medium-gray);
                                }

                                .groupInput{
                                    width: 7.5vw;
                                    height: 40%;
                                    background-color: transparent;
                                    border: none;
                                    border-bottom: 1px solid black;
                                    border-radius: 0px 0px 2px 0px;
                                    outline: none;
                                }


                                .shearchCamion{
                                    border: 1px solid black;
                                    height: 6vh;
                                    width: 80%;
                                    border-radius: 3px;
                                    text-align: center;
                                    background-color: var(--color-blueoscuro);
                                    color: var(--color-light-gray);
                                    font-weight: bold;
                                    border: none;
                                    cursor: pointer;
                                }
                            }  
                        }

                        #containerLogin{
                            display: flex;
                            flex-direction: row;
                            justify-content: center;
                            align-items: center;
                            gap: .6vw;
                            cursor: pointer;
                            padding-right: 1vw;

                            .rediretSesion{
                                font-size: .7vw;
                                font-family: var(--font-body);
                            }

                            i{
                                padding: 5%;
                                border: 1px solid black;
                                border-radius: 100%;
                            }
                         }

                         #selectLocation{
                            width: 85%;
                         }
                        

                        #containerFilter{
                            opacity: .85;
                            padding: 1%;
                            margin-top: 6.5vh;
                            z-index: 2;
                            width: 55%;
                            height: 12vh;
                            background-color: var(--color-light-gray);
                            margin-left: 2vw;
                            border-radius: 8px;
                            box-shadow: 0px 0px 20px 0px  var(--color-medium-gray);
                        }
                    }
                }
            }


             .containerPresentation{
                margin-top: 25vh;
                position: absolute;
                top: 0;
                left: 0;
                width: 100vw;
                height: 75vh;
                overflow: hidden;

                .imageCamion{
                    width: 100%;
                    height: 100%;
                    object-fit: cover; 
                }
            }


            /* SOLO PARA MOBILES */
            .containerMenunavscrolling{
                display: none;
            }


            .socialMedia{
                position: absolute;
                height: 40%;
                width: 5%;
                right: 13px;
                bottom: 15px;
                border-radius: 60px;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;

                i{
                    color: var(--color-light-gray);
                    font-size: 1.2vw;
                    padding: 12%;
                    border-radius: 100%;
                    transition: all 0.3s ease-in-out;
                    cursor: pointer;
                }

                       /* Ocultar íconos excepto el de atención al cliente */
                .socialMedia i:not(.toggleSocial) {
                    opacity: 0;
                    transform: translateY(20px);
                    pointer-events: none;
                }

                /* Mostrar íconos al hacer hover sobre el contenedor */
                .socialMedia:hover i {
                    opacity: 1;
                    transform: translateY(0);
                    pointer-events: auto;
                }
            }
        }

        .secondSection {
            height: 66vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            
            .containerOfert{
                height: 100%;
                width: 80%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden; 
                min-width: 98.6%;
                scroll-snap-type: x mandatory;
                gap: 1vw; 
                padding: 2%;
                -ms-overflow-style: none; 
                scrollbar-width: none; 
                margin: 20px 0px 0px .7%;

                .containerOfert::-webkit-scrollbar {
                    display: none; 
                }

                .camionCard{
                    height: 100%;
                    min-width: 20px;
                    max-width: 15%;
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 60% 5% 20% 8% 11%;
                    background-color: var(--color-light-gray);
                    border-radius: 3px;
                    overflow: hidden;
                    box-shadow: 0px 0px 15px 0px var(--color-medium-gray);
                    scroll-snap-align: start;
                    flex: 0 0 auto;
                
                
                    .camionUnited{
                        width: 100%;
                        height: 100%;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    .containerName{
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        .nomCamion{
                            font-family: var(--font-body);
                            width: 70%;
                            height: 5vh;
                            font-size: 1.2vw;
                            text-align: center;
                            margin-top: -2.1vw;
                            border-radius: 10px;
                            padding-top: .6vw;
                            background-color: var(--color-light-gray);
                            border-left: 2px solid black;
                            border-right: 2px solid black;
                          
                        }
                    }

                    .infoBasic{
                        height: 100%;
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-template-rows: 1fr;

                        .infoCamion{
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: start;
                            text-align: left;
                            gap: .8vw;
                            padding-left: 1vw;
                            border-right: 1px solid rgb(210, 210, 210);
                        
                            .nomInfo{
                                font-size: .6vw;
                                font-family: var(--font-title);

                            }
                        }
                    }
                    
                    .nomAdmin{
                        text-align: center;
                        font-size: .7vw;
                        padding-top: .9vw;
                        letter-spacing: 1px;
                        font-weight: bold;
                        font-family: var(--font-title);

                     
                    }

                    .sendSolicitud{
                        height: 100%;
                        width: 100%;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;

                        .precioCamion{
                            font-size: .7vw;
                            font-family: var(--color-dark-gray);
                            padding-left: 1.5vw;
                            padding-bottom: .6vw;
                        }

                        .separarCamion{
                            height: 80%;
                            width: 50%;
                            background-color: var(--color-blueoscuro);
                            border: none;
                            border-radius: 1px 0px 0px 1px;
                            color: var(--color-white);
                            font-family: var(--font-title);
                            font-weight: bold;
                            padding-bottom: .6vw;
                            cursor: pointer;
                        }
                    }
                }
            }
        }

        .thirdSection {
            height: 100vh;
            margin-top: 5vh;
            position: relative;

            /* BANNER EN PANTALLAS MÓVILES */
            .containerBanner {
                display: none;
            }

            /* Estilos para pantallas grandes */
            .containerBannerpc {
                height: 100%;
                width: 100%;
            
                /* Contenedor principal del carrusel */
                .containerCarrusel {
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    position: relative;

                    /* Track que contiene las imágenes */
                    .carouselTrack {
                        display: flex;
                        width: 400%; /* 100% por cada imagen */
                        height: 100%;
                        position: relative;
                        animation: slide-back 40s infinite; /* 40s para ciclo completo de ida y vuelta */

                        /* Imágenes del carrusel */
                         .imageBanner {
                            width: 25%; /* 100% / 4 imágenes = 25% */
                            height: 100%;
                            flex-shrink: 0;
                            background-size: cover;
                        }
                    }
                }
            }
        }

        .fourthSection {
            height: 98.7vh;
            display: flex;
            margin: .3%;

                .contaierCategories{
                    height: 100%;
                    display: flex;
                    gap: .4vw;

                    .containerCamion{
                        position: relative;
                        height: 100%;
                        width: 20%;
                        border: 1px solid black;
                        background-color: var(--color-dark-gray);
                        border-radius: 4px;
                        overflow: hidden;

                        .imageCategories{
                            opacity: .5;
                            width: 130%;
                            height: 100%;
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                        }

                        .containerBtn{
                            position: absolute;
                            bottom: 0;
                            height: 25%;
                            width: 100%;
                            display: flex;
                            justify-content: center;
                            align-items: center;

                            .btnShearch{
                                padding: 6% 30%;

                            }
                        }
                    }

                    #categoriesTrasteos, #categoriesRemolque{
                        transform: scaleX(-1);
                    }
                }
            
        }

        .fifthSection {
            margin-top: 3vw;
            height: 60vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8vw;

            .containerInfo{
                height: 50%;
                width: 22%;
                display: grid;
                grid-template-rows: 65% 1fr;
                grid-template-columns: 1fr;


                .containerinfoimage{
                    display: flex;
                    justify-content: center;
                    margin-bottom: 2vw;

                    .imageInformation{
                        height: 85%;
                        width: 20%;
                    }
                }

                .containerTxtinformation{
                    display: flex;
                    justify-content: center;
                    align-items: center;



                    .txtInformtation{
                        text-align: center;
                        font-family: var(--font-body);
                        font-size: .98vw;
                        color: var(--color-medium-gray);
                    }
                }
            }
        }

  
        .sixthSection {
            height: 70vh;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 75%;
            
            .containerFilter{
                width: 100%;
                display: flex;
                justify-content: flex-start;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-snap-type: x mandatory;
                -ms-overflow-style: none;
                scrollbar-width: none;
                white-space: nowrap; 
                    
                .containerFilter::-webkit-scrollbar {
                    display: none;
                }

                .containerOption{
                    height: 100%;
                    min-width: 50%; 
                    max-width: 100%;
                    border-radius: 5px;
                    scroll-snap-align: start;
                    flex-shrink: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 5px;
                    margin-top: 6vh;

                    .btnFilter{
                        width: 30%;
                        height: 5vh;
                        background-color: #f0f0f0;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        text-align: center;                
                        font-size: 1vw;
                        margin-left: 1.5vw;
                        font-family: var(--font-title);
                        cursor: pointer;
                    } 

                    #optionTodos{
                        background-color: var(--color-blueoscuro);
                        color: var(--color-white);
                        border: none;
                    }
                }
            }

            .containerComments{
                width: 100%;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-snap-type: x mandatory;
                -ms-overflow-style: none;
                scrollbar-width: none;
                white-space: nowrap; 
                gap: 1.5vw;
                margin: 1%;

                .commentsUnited{
                    height: 75%;
                    min-width: 280px; 
                    max-width: 18%;
                    border-radius: 5px;
                    scroll-snap-align: start;
                    flex-shrink: 0;
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 35% 55% 10%;
                    border-radius: 5px;
                    box-shadow: 0px 0px 10px 0px var(--color-medium-gray);
                    margin-left: 1vw;
                    background-color: var(--color-light-gray);
                    transition: .5s all;

                    .personComments{
                        display: grid;
                        grid-template-columns: 32% 68%;
                        margin-top: 2vw;
                        overflow: hidden;

                        .containerFotoperfil{
                            display: flex;
                            flex: 1;
                            margin-left: 2vw;

                            .fotoPerfil{
                                height: 8vh;
                                width: 100%;
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                border-radius: 100%;
                            }
                        }

                        .containerDatebasic{
                            display: grid;
                            grid-template-columns: 1fr;
                            grid-template-rows: 70% 30%;

                            .nomPerson{
                                font-family: var(--font-title);
                                text-align: start;
                                padding-left: 1vw;
                                font-size: 1.4vw;
                            }

                            .dateComment{
                                text-align: end;
                                margin-right: 1.8vw;
                                font-family: var(--font-body);
                                font-size: .5vw;
                                color: var(--color-medium-gray);
                                margin-top: -1vw;
                            }
                        }
                    }

                    .txtComments{
                        padding: 35px;
                        width: 100%; 
                        max-width: 500px; 
                        word-wrap: break-word;
                        overflow: hidden;
                        text-align: left;

                        .txtPerson{
                            font-family: var(--font-body);
                            font-size: .8vw;
                            line-height: 1.2;
                            white-space: normal;
                        }
                    }

                    .iconComments{
                        display: flex;
                        justify-content: flex-end;
                        align-items: start;
                        gap: .7vw;
                        padding-right: 2vw;
                        margin-top: -.7vw;

                        i{
                            color: black;
                            font-size: 0.9vw;
                            cursor: pointer;
                        }
                    }
                    
                    &:hover{
                        margin-top: -3vh;
                    }
                }
            }
        }

        .seventhSection {
            height: 55vh;
            border: 1px solid black;
            background-color: var(--color-blueoscuro);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 20% 70% 10%;
            grid-template-areas: 
            "containerRedesociales containerPatrocinadores containerPatrocinadores"
            "containerRedesociales containerNosotros containerNosotros"
            "containerCopy containerCopy containerCopy";
        
            #containerPatrocinadores{
                grid-area: containerPatrocinadores;
              

               .containerInfofooter{
 

                    .imgPatrocinador{
                        height: 1vh;
           
                    }
                }
            }

            #containerNosotros{
                width: 20vw;
                grid-area: containerNosotros;

            }

            #containerSocialmedia{
                height: 100%;
                width: 100%;
                grid-area: containerRedesociales;
            
                
                .containerImagefooter{
            

                    .imageFooter{
                
                    }
                }

                .containersocialMedia{
                    grid-area: containerRedesociales;
            
                    
                    i{
                        font-size: 1.3vw;
                        color: var(--color-white);
                    }
                }
            }

            #containerCopy{
                grid-area: containerCopy;

            }
        }

        .sectionPatrocinadores{
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            white-space: nowrap;
            background: #fff;


            .carrusel {
                display: flex;
                width: 100%;
                overflow: hidden;
                position: relative;

                .carrusel-inner {
                    display: flex;
                    align-items: center;
                    gap: 3vw;
                    animation: scroll 15s linear infinite;

                    .imgPatrocinadores{
                        height: 55%;
                        width: 2.2%;
                        background-position: center;
                        background-size: cover;
                        background-repeat: no-repeat;
                    }
                }
            }
        }
    }

/* ANIMACIONES DE SECCION DE PC */

/* SECCION DE PATROCINADORES */
 /* Animación infinita */
 @keyframes scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}
/* ---------------------------------- */


/* TERCERA SECCION DE BANNER PUBLICITARIOS RELACIONADOS CON CAMIONES */
/* Animación del carrusel con ida y vuelta - cada imagen dura 4s y transición de 1s */
@keyframes slide-back {
    /* Primera parte - avance hacia adelante */
    0% {
        transform: translateX(0%);
    }
    9.5% {
        transform: translateX(0%); /* Primera imagen se muestra durante 4s (9.5% de 40s ≈ 4s) */
    }
    12.5% {
        transform: translateX(-25%); /* Transición de 1s a la segunda imagen (3% de 40s ≈ 1s) */
    }
    22% {
        transform: translateX(-25%); /* Segunda imagen se muestra durante 4s */
    }
    25% {
        transform: translateX(-50%); /* Transición de 1s a la tercera imagen */
    }
    34.5% {
        transform: translateX(-50%); /* Tercera imagen se muestra durante 4s */
    }
    37.5% {
        transform: translateX(-75%); /* Transición de 1s a la cuarta imagen */
    }
    47% {
        transform: translateX(-75%); /* Cuarta imagen se muestra durante 4s */
    }
    
    /* Segunda parte - retroceso hacia atrás */
    50% {
        transform: translateX(-50%); /* Transición de 1s a la tercera imagen (retrocediendo) */
    }
    59.5% {
        transform: translateX(-50%); /* Tercera imagen se muestra durante 4s */
    }
    62.5% {
        transform: translateX(-25%); /* Transición de 1s a la segunda imagen (retrocediendo) */
    }
    72% {
        transform: translateX(-25%); /* Segunda imagen se muestra durante 4s */
    }
    75% {
        transform: translateX(0%); /* Transición de 1s a la primera imagen (retrocediendo) */
    }
    84.5% {
        transform: translateX(0%); /* Primera imagen se muestra durante 4s */
    }
    
    /* Pequeña pausa antes de reiniciar el ciclo */
    100% {
        transform: translateX(0%); /* Permanece en la primera imagen hasta el reinicio */
    }
}
/* --------------------------------------------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------------------------------------------- */

/* ANIMACIONES DE MOBILES */

@keyframes slide-carousel {
    0% {
        transform: translateX(0);
    }
    20% {
        transform: translateX(0); /* Primera imagen se muestra durante 4s */
    }
    25% {
        transform: translateX(-25%); /* Transición a segunda imagen en 1s */
    }
    45% {
        transform: translateX(-25%); /* Segunda imagen se muestra durante 4s */
    }
    50% {
        transform: translateX(-50%); /* Transición a tercera imagen en 1s */
    }
    70% {
        transform: translateX(-50%); /* Tercera imagen se muestra durante 4s */
    }
    75% {
        transform: translateX(-75%); /* Transición a cuarta imagen en 1s */
    }
    95% {
        transform: translateX(-75%); /* Cuarta imagen se muestra durante 4s */
    }
    100% {
        transform: translateX(0); /* Vuelve al inicio en 1s */
    }
}

/* ----------------------------------------------------------------------------------------------------------------- */
    </style>
    
    <section class="firstSection"> <!-- Sección principal con el testing de la ubicación -->

        <!-- HEADER: Encabezado de la web -->
        <header class="containeHead">

            <p class="txtBanner" id="txtUno">TRANSPORTAMOS TU MERCANCIA A NIVEL NACIONAL</p>
        </header>

        <!-- NAV: Menu de navegacion y titulo -->
        <nav class="containerMenunav">

            <form action="" method="POST" class="sendSolicitud">


                <div class="containerNomapp">

                <article class="infoSolictud">

                    <div class="containerSoicitud Up">

                        <h1 class="nomApp">Decamiones.com</h1>

                    </div>

                    <div class="containerSoicitud Up">
                        
                      <ul class="iconInteres">

                        <!-- Icono de Corazón -->
                        <i class="fas fa-heart"></i>

                        <!-- Icono de Agenda -->
                        <i class="fas fa-calendar"></i>

                        
                        <!-- Icono de Camión (Truck) -->
                        <i class="fas fa-truck"></i>


                       <li><button type="submit" class="optionNavpc" id="btnInicio">Inicio</button></li>
                       <li><button type="submit" class="optionNavpc">Economicos</button></li>
                       <li><button type="submit" class="optionNavpc">Nosotros</button></li>
                       <li><button type="submit" class="optionNavpc">Camiones</button></li>
                       <li><button type="submit" class="optionNavpc">Feedback</button></li>

                      </ul>
                        
                    </div>

                </article>

                <article class="infoSolictud" id="containerFilter">

                    
                    <div class="containerSoicitud Down" id="containerCity">

                        <label for="" class="nomInput">
                            Seleccione su ciudad:
                        </label>
                        <select name="ciudades" class="groupInput" id="selectLocation">
                            <option value="todo_colombia" selected disabled>Todo Colombia</option>
                            <option value="cali">Cali</option>
                            <option value="bogota">Bogotá</option>
                            <option value="medellin">Medellín</option>
                            <option value="barranquilla">Barranquilla</option>
                            <option value="bucaramanga">Bucaramanga</option>
                            <option value="cartagena">Cartagena</option>
                            <option value="pereira">Pereira</option>
                            <option value="manizales">Manizales</option>
                        </select>
                        

                    </div>


                    <div class="containerSoicitud Down">

                        <label for="" class="nomInput">
                            Fecha de salida:
                        </label>
                        <input type="date" class=groupInput>

                    </div>
    
                    <div class="containerSoicitud Down">

                        <label for="" class="nomInput">
                            Fecha de entrega:
                        </label>
                        <input type="date" class=groupInput>
                        
                    </div>
    
                    <div class="containerSoicitud Down">
                        
                       <button type="submit" class="shearchCamion">Buscar Camion</button>
                       
                    </div>

                    
                    <div class="containerSoicitud Down" id="containerLogin">

                        <p class="rediretSesion">INICIAR SESION</p>
                        <i class="fas fa-user"></i>

                    </div>

                </article>

                </div>

            </form>
        </nav>

        <!-- FIGURE: Imenes y carrusel de presentacion -->
        <figure class="containerPresentation">
            <video src="Video corporativo _ Transportes SATA _ DOSIS VIDEOMARKETING.mp4" class="imageCamion" autoplay loop muted></video>
        </figure>

        <!-- SOLO PARA MOBILES -->
        <div class="containerMenunavscrolling">

            <!-- Ícono de Ofertas -->
            <i class="fas fa-gift"></i>

            <!-- Ícono de Información (Pie de página) -->
            <i class="fas fa-info-circle"></i>

            <!-- Ícono de Casa -->
            <i class="fas fa-home" id="home"></i>

            <!-- Ícono de Descuento (Etiqueta de Precio) -->
            <i class="fas fa-tag"></i>

             <!-- Ícono de Usuario -->
             <i class="fas fa-user"></i>

        </div>

        <span class="socialMedia">
            <i class="fab fa-whatsapp" style="background-color: #25D366;"></i>
            <i class="fab fa-instagram" style="background-color: #E4405F;"></i>
            <i class="fas fa-phone" style="background-color: #34B7F1;"></i>
            <i class="fab fa-tiktok" style="background-color: #69C9D0;"></i>
            <i class="fab fa-telegram-plane" style="background-color: #0088CC;"></i>
            <i class="fas fa-headset toggleSocial" style="background-color: #0056A0;"></i> <!-- Atención al cliente -->
        </span>
        

    </section>
    
    <section class="secondSection"> <!-- Sección con camiones en promociones -->

        
        <figure class="containerOfert">

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://montoexpress.com/wp-content/uploads/2024/05/IMG_6051.jpeg" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">RENAULT</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 220.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 1.200</p>
                        <p class="nomInfo"><strong>ESTADO: </strong>Usado</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Trasteos</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 1997</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Bogota</p>
                    </span>

                </div>

                <p class="nomAdmin">ALEXIS GIL</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRu_zmCBtEqiXRsF_oUWHsJsbTyQKsLxGoMhjd7CRBlFuOdiX4MaFmEQmlbWDbnTphQRM&usqp=CAU" alt="" class="camionUnited">
    
                    <span class="containerName">
                        <h2 class="nomCamion">KENWORTH</h2>
                    </span>
    
                    <div class="infoBasic">
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>KM:</strong> 120.000</p>
                            <p class="nomInfo"><strong>TORQUE:</strong> 1.200</p>
                            <p class="nomInfo"><strong>ESTADO: </strong>Usado</p>
                        </span>
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>CARGA:</strong> Cañero</p>
                            <p class="nomInfo"><strong>MODELO:</strong> 2005</p>
                            <p class="nomInfo"><strong>CIUDAD:</strong> Cali</p>
                        </span>
    
                    </div>
    
                    <p class="nomAdmin">MATEO BUENAVIDA LALALA</p>
    
                    <div class="sendSolicitud">
    
                        <p class="precioCamion"><strong>CO </strong>150.000</p>
    
                        <button type="submit" class="separarCamion">AGENDAR</button>
                    </div>
    
            </article>

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO6b_sI9-5MT8kg8F9XH54dKBPOIibtO_cs546fh3ZgmHh8efloZ5_aU8kQljC7yKxeSw&usqp=CAU" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">VOLVO</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 50.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 2.200</p>
                        <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Cisterna</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 2018</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Cali</p>
                    </span>

                </div>

                <p class="nomAdmin">GIAN RIVERO</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                    <img src="https://th.bing.com/th/id/OIP.s8Juf7kq_9yA8tZ6v7eGNwHaFj?w=1200&h=900&rs=1&pid=ImgDetMain" alt="" class="camionUnited">
    
                    <span class="containerName">
                        <h2 class="nomCamion">KENWORTH</h2>
                    </span>
    
                    <div class="infoBasic">
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>KM:</strong> 100.000</p>
                            <p class="nomInfo"><strong>TORQUE:</strong> 3.800</p>
                            <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                        </span>
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>CARGA:</strong> Carga</p>
                            <p class="nomInfo"><strong>MODELO:</strong> 2016</p>
                            <p class="nomInfo"><strong>CIUDAD:</strong> Guajira</p>
                        </span>
    
                    </div>
    
                    <p class="nomAdmin">AURELIO CASILLAS</p>
    
                    <div class="sendSolicitud">
    
                        <p class="precioCamion"><strong>CO </strong>150.000</p>
    
                        <button type="submit" class="separarCamion">AGENDAR</button>
                    </div>
    
            </article>

            
            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://montoexpress.com/wp-content/uploads/2024/05/IMG_6051.jpeg" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">RENAULT</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 220.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 1.200</p>
                        <p class="nomInfo"><strong>ESTADO: </strong>Usado</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Trasteos</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 1997</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Bogota</p>
                    </span>

                </div>

                <p class="nomAdmin">ALEXIS GIL</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRu_zmCBtEqiXRsF_oUWHsJsbTyQKsLxGoMhjd7CRBlFuOdiX4MaFmEQmlbWDbnTphQRM&usqp=CAU" alt="" class="camionUnited">
    
                    <span class="containerName">
                        <h2 class="nomCamion">KENWORTH</h2>
                    </span>
    
                    <div class="infoBasic">
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>KM:</strong> 120.000</p>
                            <p class="nomInfo"><strong>TORQUE:</strong> 1.200</p>
                            <p class="nomInfo"><strong>ESTADO: </strong>Usado</p>
                        </span>
    
                        <span class="infoCamion">
                            <p class="nomInfo"><strong>CARGA:</strong> Cañero</p>
                            <p class="nomInfo"><strong>MODELO:</strong> 2005</p>
                            <p class="nomInfo"><strong>CIUDAD:</strong> Cali</p>
                        </span>
    
                    </div>
    
                    <p class="nomAdmin">MATEO BUENAVIDA LALALA</p>
    
                    <div class="sendSolicitud">
    
                        <p class="precioCamion"><strong>CO </strong>150.000</p>
    
                        <button type="submit" class="separarCamion">AGENDAR</button>
                    </div>
    
            </article>

            
            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO6b_sI9-5MT8kg8F9XH54dKBPOIibtO_cs546fh3ZgmHh8efloZ5_aU8kQljC7yKxeSw&usqp=CAU" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">VOLVO</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 50.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 2.200</p>
                        <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Cisterna</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 2018</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Cali</p>
                    </span>

                </div>

                <p class="nomAdmin">GIAN RIVERO</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://th.bing.com/th/id/OIP.s8Juf7kq_9yA8tZ6v7eGNwHaFj?w=1200&h=900&rs=1&pid=ImgDetMain" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">KENWORTH</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 100.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 3.800</p>
                        <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Carga</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 2016</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Guajira</p>
                    </span>

                </div>

                <p class="nomAdmin">AURELIO CASILLAS</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

            
            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://th.bing.com/th/id/OIP.s8Juf7kq_9yA8tZ6v7eGNwHaFj?w=1200&h=900&rs=1&pid=ImgDetMain" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">KENWORTH</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 100.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 3.800</p>
                        <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Carga</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 2016</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Guajira</p>
                    </span>

                </div>

                <p class="nomAdmin">AURELIO CASILLAS</p>

                <div class="sendSolicitud">

                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>

          
            <!-- Contenedor de camion -->
            <article class="camionCard">
                
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO6b_sI9-5MT8kg8F9XH54dKBPOIibtO_cs546fh3ZgmHh8efloZ5_aU8kQljC7yKxeSw&usqp=CAU" alt="" class="camionUnited">

                <span class="containerName">
                    <h2 class="nomCamion">VOLVO</h2>
                </span>

                <div class="infoBasic">

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>KM:</strong> 50.000</p>
                        <p class="nomInfo"><strong>TORQUE:</strong> 2.200</p>
                        <p class="nomInfo"><strong>ESTADO: </strong> Nuevo</p>
                    </span>

                    <span class="infoCamion">
                        <p class="nomInfo"><strong>CARGA:</strong> Cisterna</p>
                        <p class="nomInfo"><strong>MODELO:</strong> 2018</p>
                        <p class="nomInfo"><strong>CIUDAD:</strong> Cali</p>
                    </span>

                </div>

                <p class="nomAdmin">GIAN RIVERO</p>

                <div class="sendSolicitud">
                    <p class="precioCamion"><strong>CO </strong>150.000</p>

                    <button type="submit" class="separarCamion">AGENDAR</button>
                </div>

            </article>
            


        </figure>

    </section>
    
    <section class="thirdSection">

        <!-- Contenedor de banner publicitarios para móviles -->
        <div class="containerBanner">
            <div class="containerCarrusel">
                <div class="carouselTrack">
                    <img src="https://img.pikbest.com/templates/20221008/bg/df26243e81bf9.png!w700wp" alt="" class="imageBanner">
                    <img src="https://dercomaq-pe-prod.s3.amazonaws.com/images/contents/jac-camiones/2024-06-26-BannerHome-Mobile-002-2_11zon.webp" alt="" class="imageBanner">
                    <img src="https://image.made-in-china.com/226f3j00HBmcJuOMKboA/Cami-n-de-publicidad-con-pantalla-LED-peque-a-exterior-impermeable-pantalla-LED-m-vil-a-todo-color-camiones-de-publicidad-en-venta.webp" alt="" class="imageBanner">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiWqAq2KwqVyQBMHS6Fd1ujCkcCLz8df-9xkCyifhLwVdYRfNFGjvwk1QowtvshDCcPZQ&usqp=CAU" alt="" class="imageBanner">
                </div>
            </div>
        </div>
    
        <!-- Carrusel para pantallas grandes -->
        <div class="containerBannerpc">
            <div class="containerCarrusel">
                <div class="carouselTrack">
                    <img src="https://images.template.net/162397/transport-and-logistics-semi-truck-trailer-wrap-design-for-long-hauls-template-y4rox.jpg" alt="" class="imageBanner">
                    <img src="https://img.freepik.com/vector-gratis/banner-venta-concesionario-automoviles-diseno-plano_23-2149923034.jpg?w=360" alt="" class="imageBanner">
                    <img src="https://www.shutterstock.com/image-vector/tyre-banner-buy-4-2-260nw-2036596607.jpg" alt="" class="imageBanner">
                    <img src="https://camiondirecto.com/blog/wp-content/uploads/2018/11/Banner-camion-directo.jpg" alt="" class="imageBanner">
                </div>
            </div>
        </div>
    </section>

    <section class="sectionPatrocinadores">  <!--  Sección de carrusel de patrocinadores y marcas de camiones -->
        <div class="carrusel">
            <div class="carrusel-inner">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
            </div>
        </div>
    </section>

    <section class="fourthSection"> <!-- Sección con categorías de camiones -->

        <!-- Contenedor de categorias -->
        <span class="contaierCategories">

            <!-- Categoria individual a acceder "CARGA" -->
            <figure class="containerCamion">
                    <img src="https://mexico.internationaltrucks.com/hubfs/tractocamion.jpg" id="categoriesTrasteos" alt="" class="imageCategories">

                    <div class="containerBtn">

                        <button type="submit" class="btnShearch">CARGA</button>

                    </div>
                    
            </figure>

            <!-- Categoria individual a "CISTERNA" -->
            <figure class="containerCamion">
                    <img src="https://bbrskrveu.s3-sa-east-1.amazonaws.com/images/product/7000378_1-fotor-%20(2)_1695758878385-1300.jpg" alt="" class="imageCategories">

                    <div class="containerBtn">

                        <button type="submit" class="btnShearch">CISTERNA</button>

                    </div>
                    
            </figure>

            <!-- Categoria individual a acceder "TRACKTOMULA" -->
            <figure class="containerCamion">
                    <img src="https://i.pinimg.com/736x/97/8f/24/978f2450b3fcae5290a10b7f67145d24.jpg" alt="" class="imageCategories">

                    <div class="containerBtn">

                        <button type="submit" class="btnShearch">TRACKTOMULA</button>

                    </div>
                    
            </figure>

            <!-- Categoria individual a acceder "TRASTEO" -->
            <figure class="containerCamion">
                        <img src="https://mudanzasmanizales.com/wp-content/uploads/2024/08/4.-camion-de-mudanzas.jpg" alt="" class="imageCategories">
        
                        <div class="containerBtn">
        
                            <button type="submit" class="btnShearch">TRASTEOS</button>
        
                        </div>
        
            </figure>

            <!-- Categoria individual a acceder "GRUA" -->
            <figure class="containerCamion">
                    <img src="https://image.made-in-china.com/202f0j00pSEblsjhMmov/New-or-Used-4-2-Wrecker-Road-Block-Flatbed-Cargo-Tow-Truck.webp"  id="categoriesRemolque" alt="" class="imageCategories">

                    <div class="containerBtn">

                        <button type="submit" class="btnShearch">REMOLQUE</button>

                    </div>
                    
            </figure>

            <!-- Categoria individual a acceder "CAÑERO" -->
            <figure class="containerCamion">
                    <img src="https://scontent.fclo8-1.fna.fbcdn.net/v/t1.6435-9/116349196_3039173892868277_4645789046130230001_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_ohc=yluBjU7W7DgQ7kNvgGI-r6e&_nc_oc=AdjmO8rRc22IeF7ALJ_-mXXOQvaDhgHFM1IbhVrSZciXMqp7exiczIKipI-BZI3Asw0&_nc_zt=23&_nc_ht=scontent.fclo8-1.fna&_nc_gid=AXL3KYW7joPofO3y7sd1r4k&oh=00_AYBFh3mKJ9LdHJXT7hJtL-aHcaBtbGXnfFEkxEy8ki96Ig&oe=67E789C5" alt="" class="imageCategories">

                    <div class="containerBtn">

                        <button type="submit" class="btnShearch">CAÑERO</button>

                    </div>
                    
            </figure>

        </span>

    </section>

    <section class="sectionPatrocinadores">  <!--  Sección de carrusel de patrocinadores y marcas de camiones -->
        <div class="carrusel">
            <div class="carrusel-inner">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">  <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinadores">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinadores">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinadores">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinadores">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinadores">
            </div>
        </div>
    </section>
    
    <section class="fifthSection"> <!-- Sección sobre lo que nos hace directos, información de usuarios -->

        <!-- Contenedor de informacion relevante "SOBRE NOSOTROS" -->
        <article class="containerInfo">

            <figure class="containerinfoimage">
                <img src="https://cdn-icons-png.flaticon.com/512/4924/4924195.png" alt="" class="imageInformation">
            </figure>
            
            <article class="containerTxtinformation">
                <p class="txtInformtation">En <strong>Decamiones</strong>, alquilamos camiones en Colombia con la mejor relación
                     costo-tiempo. Conectamos a clientes con vehículos confiables, garantizando rapidez, seguridad y 
                     transparencia en cada alquiler.</p>
            </article>

        </article>

        <!-- Contenedor de informacion relevante "COMUNIDAD" -->
        <article class="containerInfo">

            <figure class="containerinfoimage">
                <img src="https://cdn-icons-png.flaticon.com/512/10204/10204296.png" alt="" class="imageInformation">
            </figure>
            
            
            <article class="containerTxtinformation">
                <p class="txtInformtation">Somos una gran comunidad de camioneros y clientes
                     que crece cada día, ofreciendo seguridad, rentabilidad y confianza. ¡Únete a la comunidad líder en 
                     alquiler de camiones en Colombia!</p>
            </article>

        </article>

        <!-- Contenedor de informacion relevante "SERVICIOS" -->
        <article class="containerInfo">

            <figure class="containerinfoimage">
                <img src="https://cdn-icons-png.freepik.com/256/17555/17555378.png?semt=ais_hybrid" alt="" class="imageInformation">
            </figure>
            
            
            <article class="containerTxtinformation">
                <p class="txtInformtation">Ofrecemos alquiler de camiones para cualquier necesidad, desde carga pesada hasta mudanzas,
                     con disponibilidad inmediata y precios justos. Garantizamos rapidez, seguridad y transparencia en cada servicio.</p>
            </article>

        </article>

    </section>
    
    <section class="sixthSection"> <!-- Sección de comentarios de los usuarios -->

        <!-- Contenedor de filtrado sobre comentarios -->
        <nav class="containerFilter">

           <!-- contenedor que almacena las opciones  Menu de filtrado de los comentarios -->
            <ul class="containerOption">

                <button type="submit" class="btnFilter" id="optionTodos">Todos</button>
                <button type="submit" class="btnFilter">Recientes</button>
                <button type="submit" class="btnFilter">Antiguos</button>
                <button type="submit" class="btnFilter">Mejor valorado</button>
                <button type="submit" class="btnFilter">Menos valorado</button>

            </ul>

        </nav>

        <!-- Contenedor de comentarios -->
        <span class="containerComments">

           <!--  Comentarios unitarios del uso de la app -->
            <figure class="commentsUnited">

                <span class="personComments">
                    <figure class="containerFotoperfil">
                        <img src="https://plus.unsplash.com/premium_photo-1706547271045-3727ecc70a29?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG9tYnJlJTIwZGUlMjAzMCUyMGElQzMlQjFvc3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="fotoPerfil">
                    </figure>


                    <div class="containerDatebasic">
                        <h3 class="nomPerson">Camilo Muñoz</h3>
                        <p class="dateComment">Hace 2 semanas</p>
                    </div>
                </span>


                <article class="txtComments">
                    <p class="txtPerson">Usé el servicio de alquiler de camiones y fue un éxito total. El proceso fue rápido, el camión estaba en excelente estado y el precio fue justo. Sin duda, volveré a alquilar con ustedes. ¡Muy recomendado!</p>
                </article>

                <div class="iconComments">
                    <i class="far fa-thumbs-up"></i> <!-- Like -->
                    <i class="far fa-thumbs-down"></i> <!-- Dislike -->
                    <i class="fa fa-share"></i> <!-- Compartir -->
                </div>

            </figure>

              <!--  Comentarios unitarios del uso de la app -->
              <figure class="commentsUnited">

                <span class="personComments">
                    <figure class="containerFotoperfil">
                        <img src="https://plus.unsplash.com/premium_photo-1706547271045-3727ecc70a29?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG9tYnJlJTIwZGUlMjAzMCUyMGElQzMlQjFvc3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="fotoPerfil">
                    </figure>


                    <div class="containerDatebasic">
                        <h3 class="nomPerson">Camilo Muñoz</h3>
                        <p class="dateComment">Hace 2 semanas</p>
                    </div>
                </span>


                <article class="txtComments">
                    <p class="txtPerson">Usé el servicio de alquiler de camiones y fue un éxito total. El proceso fue rápido, el camión estaba en excelente estado y el precio fue justo. Sin duda, volveré a alquilar con ustedes. ¡Muy recomendado!</p>
                </article>

                <div class="iconComments">
                    <i class="far fa-thumbs-up"></i> <!-- Like -->
                    <i class="far fa-thumbs-down"></i> <!-- Dislike -->
                    <i class="fa fa-share"></i> <!-- Compartir -->
                </div>

            </figure>

              <!--  Comentarios unitarios del uso de la app -->
              <figure class="commentsUnited">

                <span class="personComments">
                    <figure class="containerFotoperfil">
                        <img src="https://plus.unsplash.com/premium_photo-1706547271045-3727ecc70a29?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG9tYnJlJTIwZGUlMjAzMCUyMGElQzMlQjFvc3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="fotoPerfil">
                    </figure>


                    <div class="containerDatebasic">
                        <h3 class="nomPerson">Camilo Muñoz</h3>
                        <p class="dateComment">Hace 2 semanas</p>
                    </div>
                </span>


                <article class="txtComments">
                    <p class="txtPerson">Usé el servicio de alquiler de camiones y fue un éxito total. El proceso fue rápido, el camión estaba en excelente estado y el precio fue justo. Sin duda, volveré a alquilar con ustedes. ¡Muy recomendado!</p>
                </article>

                <div class="iconComments">
                    <i class="far fa-thumbs-up"></i> <!-- Like -->
                    <i class="far fa-thumbs-down"></i> <!-- Dislike -->
                    <i class="fa fa-share"></i> <!-- Compartir -->
                </div>

            </figure>

              <!--  Comentarios unitarios del uso de la app -->
              <figure class="commentsUnited">

                <span class="personComments">
                    <figure class="containerFotoperfil">
                        <img src="https://plus.unsplash.com/premium_photo-1706547271045-3727ecc70a29?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG9tYnJlJTIwZGUlMjAzMCUyMGElQzMlQjFvc3xlbnwwfHwwfHx8MA%3D%3D" alt="" class="fotoPerfil">
                    </figure>


                    <div class="containerDatebasic">
                        <h3 class="nomPerson">Camilo Muñoz</h3>
                        <p class="dateComment">Hace 2 semanas</p>
                    </div>
                </span>


                <article class="txtComments">
                    <p class="txtPerson">Usé el servicio de alquiler de camiones y fue un éxito total. El proceso fue rápido, el camión estaba en excelente estado y el precio fue justo. Sin duda, volveré a alquilar con ustedes. ¡Muy recomendado!</p>
                </article>

                <div class="iconComments">
                    <i class="far fa-thumbs-up"></i> <!-- Like -->
                    <i class="far fa-thumbs-down"></i> <!-- Dislike -->
                    <i class="fa fa-share"></i> <!-- Compartir -->
                </div>

            </figure>
            
        </span>

    </section>
    
    <section class="seventhSection" zstyle="display: none;"> <!-- Pie de página -->

        <!-- Contenedor sobre promocionales -->
        <article class="containerInfofooter" id="containerPatrocinadores">
            
            <figure class="containerInfofooter">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Renault-300x300.png" alt="" class="imgPatrocinador">
                <img src="https://groupgg.com/vistas/img/mack.png" alt="" class="imgPatrocinador">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png" alt="" class="imgPatrocinador">
                <img src="https://halley.com.py/wp-content/uploads/2023/03/Logo-Mercedes-Benz-Estrella.png" alt="" class="imgPatrocinador">
                <img src="https://www.camionesjac.com/wp-content/uploads/2022/10/CAMIONES-2.png.webp" alt="" class="imgPatrocinador">
            </figure>
        </article>

        <!-- Contenedor sobre Preguntas frecuentes-->
        <article class="containerInfofooter" id="containerNosotros">

            <div class="containerQuestion">

                <span class="containerInfoquestion">
                    <a href="http://" class="optionQustion">Sobre nosotros</a>
                    <a href="http://" class="optionQustion">Politicas de privacidad</a>
                    <a href="http://" class="optionQustion">Tratamiento de datos</a>
                </span>

                <span class="containerInfoquestion">
                    <a href="http://" class="optionQustion">Preguntas frecuentes</a>
                    <a href="http://" class="optionQustion">Reportes</a>
                    <a href="http://" class="optionQustion">Iniciar sesion</a>
                </span>

            </div>

        </article>

        <!-- Contenedor sobre redes sociales -->
        <article class="containerInfofooter" id="containerSocialmedia">

            
            <figure class="containerImagefooter">
<!--                 <img src="https://images.pexels.com/photos/14087963/pexels-photo-14087963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="imageFooter">
 -->            </figure>

            <div class="containersocialMedia">

                <!-- Icono de WhatsApp -->
                <i class="fa-brands fa-whatsapp"></i>

                <!-- Icono de TikTok -->
                <i class="fa-brands fa-tiktok"></i>

                <!-- Icono de Instagram -->
                <i class="fa-brands fa-instagram"></i>

                <!-- Icono de Teléfono -->
                <i class="fa-solid fa-phone"></i>

                <!-- Icono de Correo -->
                <i class="fa-solid fa-envelope"></i>

            </div>

        </article>

        <!-- Contenedor sobre COPYRIGTH -->
        <article class="containerInfofooter" id="containerCopy">
            <p class="copyRigth">&copy; 2025 GRUPO CONECTA. Todos los derechos reservados.</p>
        </article>


    </section>


    <script>
        document.querySelector(".toggleSocial").addEventListener("click", function () {
            document.querySelector(".socialMedia").classList.toggle("show");
        });
    </script>


</body>
</html>