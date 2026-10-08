
/* *{
    margin: 0;
    padding: 0;

}

body{
    height: 100%;
    width: 100vh;
    background-image: url(images/bg1.jpg);
    background-size: cover;
    background-position: center;
    position:relative;
    overflow:hidden;
    background-repeat:no-repeat;
} */

*{
    margin: 0;
    padding: 0;

}

.main{
    width: 100%;
    background:url(images/ww.jpeg);
    /* background: linear-gradient(to top, rgba(0,0,0,0)50%,rgba(0,0,0,0)50% ),url(images/bg2.jpg);; */

    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: rgb(0, 189, 255);
    font-size: 35px;
    margin-top: 10px;
}

.menu{
    width:400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: aqua;
    transition: 0.4s ease-in-out;
}


ul li a:hover{
    color:rgb(146, 146, 178);

}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;

}

/* .srch{
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid white;
    margin-top: 13px;
    color: yellow;
    border-right: none;
    font-size: 16px;
    float: left;
    padding:left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
} */

.btn{
    width: 100%;
    height: 40px;
    background: white;
    border: 2px solid white;
    margin-top: 13px;
    color: blueviolet;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
}

.btn:focus{
    outline: none;
}

.srch:focus{
outline:none;
}

.content{
    width: 80%;
    height: auto;
    margin: auto;
    color: aliceblue;
    position: relative;
   
    backdrop-filter: blur(25px);
    
}

.content .par{
    padding-left: 0px;
    padding-bottom: 25px;
   letter-spacing: 1.2px;
   line-height: 30px;   
}

.content h1{
    font-size: 50px;
    padding-left: 0px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.cn{
    width: 160px;
    height: 40px;
    background: #EB931E;
    border: none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
}