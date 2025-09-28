
<?php include "../pages/check_login.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write content</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- <link rel="stylesheet" href="/project/style.css"> -->
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Varela+Round&display=swap');
    @media screen and (max-width:1140px) {
   main .container{
    width: 992px;
   }
   section .container{
    width: 600px;
   }
   section .about-self .left{
    width: 100%;
    margin-bottom: 1.5rem;
   }
   section .about-self .right{
    width: 100%;
    padding:0;
   }
   section .do-me .do-inner{
    width: 48%;
    margin-bottom: 1.5rem;
    margin-right: 0;
   }
   section .do-me .do-inner:nth-child(2n+1){
        margin-right: 4%;
   }
   section .portfolio-me .portfolio-inner{
    width: 48%;
    margin-right: 0;
   }
   section .portfolio-me .portfolio-inner:nth-child(2n+1){
    margin-right: 4%;
   }
   section.contact .contact-me .left{
    width: 100%;
   }
   section.contact .contact-me .right{
    width: 100%;
    margin-left: 0;
   }
}
@media screen and (max-width:992px) {
    html{
        font-size: 14px;
    }
    main .container{
        width: 768px;
    }
    section .portfolio-me .portfolio-inner{
        width: 100%;
    }
}
@media screen and (max-width:768px) {
    html{
        font-size: 13px;
    }
    main .container{
        width: 576px;
    }
    section .container{
        width: 400px;
    }
    section .do-me .do-inner{
        width: 100%;
        margin-right: 0;
    }
}
@media screen and (max-width:576px) {
    html{
        font-size: 12px;
    }
    main .container{
        width: 400px;
    }
    section .container{
        width: 360px;
    }
}
@media screen and (max-width:400px) {
    html{
        font-size: 11px;
    }
    main .container{
        width: 320px;
    }
    section .container{
        width: 320px;
    }
    main h4{
        font-size: 1.5rem;
    }
    section .title h2{
        font-size: 3rem;
    }
}
/* 기본스타일 정의 */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
a, a:link, a:visited{
    color:inherit;
    text-decoration: none;
}
li{
    list-style: none;
}
        .container{
    width:1140px;
    margin: 0 auto;
}
header{
    position:fixed;
    color:white;
    top:0;
    z-index: 1;
    width: 100%;
    padding: 1rem;
}
header .container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    
}
header nav ul{
    display: flex;
    list-style: none;
}
header nav ul li{
    padding: 10px;
    list-style: none;
}
header button{
    background: transparent;
    border: 0;
    cursor: pointer;
    color: white;
}
header h1 button{
    font-size: 2rem;
    font-weight: bold;
    
}
header nav ul li button
header nav ul li a{
    font-size: 1.2rem;
    padding: 10px;
    display: inline-block;
}


header.active{
    background-color: rgba(0,0,0);
    animation: fadeIn 0.5s ease-in-out;
}
@keyframes fadeIn{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
        /* 전체 레이아웃 */
body {
    margin-top: 80px;
    font-family: Arial, sans-serif;
    background-color: #111; /* 진한 배경 */
    color: #f5f5f5; /* 밝은 글씨 */
    margin: 0;
    padding: 0;
}


h3 {
    margin-bottom: 15px;
    font-size: 20px;
    border-left: 5px solid #888;
    padding-left: 10px;
}

#main_content {
    max-width: 900px;
    margin: auto;
    padding: 20px;
    padding-top: 150px;
}
/* 게시글 보기 페이지 스타일 */
#board_box {
    background-color: #1c1c1c; /* 어두운 카드형 배경 */
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
}

#board_title {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 25px;
    padding-bottom: 10px;
    border-bottom: 2px solid #444;
    color: #fff;
}

#view_content li {
    padding: 15px 0;
    border-bottom: 1px solid #333;
    font-size: 1rem;
    line-height: 1.6;
}

#view_content li:last-child {
    border-bottom: none;
}

#view_content .col1 {
    display: inline-block;
    font-weight: bold;
    color: #ddd;
}

#view_content .col2 {
    float: right;
    color: #aaa;
    font-size: 0.9rem;
}

#view_content a {
    color: #aaa;
    text-decoration: underline;
    font-size: 0.9rem;
}

#view_content a:hover {
    color: #fff;
}

.buttons {
    margin-top: 30px;
    text-align: right;
}

.buttons li {
    display: inline-block;
    margin-left: 10px;
}

.buttons button {
    background-color: #333;
    color: #f5f5f5;
    border: 1px solid #555;
    padding: 8px 15px;
    font-size: 0.9rem;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.buttons button:hover {
    background-color: #555;
    border-color: #777;
}

     </style>
</head>
<body>
    <header>
        <?php include "../includes/header.php";?>
    </header>
    <section>
        <div id="main_content">
            <div id="board_box">
                <h3 id="board_title">
                    VIEW
                </h3>
<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost","khlee","hyos8603@@","sample");
    $sql = "select * from board where num=$num";
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
    $id = $row["id"];
    $name = $row["name"];
    $regist_day = $row["regist_day"];   
    $subject = $row["subject"];
    $content = $row["content"];
    $file_name = $row["file_name"]; 
    $file_type = $row["file_type"];
    $file_copied = $row["file_copied"];
    $hit= $row["hit"];  

    $content = str_replace(" ","&nbsp;",$content);
    $content = str_replace("\n","<br>",$content);   

    $new_hit = $hit+1;
    $sql = "update board set hit = $new_hit where num=$num";
    mysqli_query($con,$sql);
?>
    <ul id="view_content">
        <li>
            <span class="col1"><b>TITLE :</b> <?=$subject?></span>
            <span class="col2"><?=$name?> | <?=$regist_day?></span>
        </li>
        <li>
<?php
        if($file_name){
            $real_name = $file_copied;
            $file_path = "./data/".$real_name;
            $file_size = filesize($file_path);

            echo " ATTACHMENT : $show_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
            <a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[SAVE]</a><br><br>";
        }
?>
            <?=$content?>
        </li>
    </ul>
    <ul class="buttons">
        <li><button onclick="location.href='board_list.php'">LIST</button></li>
        <li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">MODIFY</button></li>
        <li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">DELETE</button></li>
        <li><button onclick="location.href='board_form.php'">WRITE</button></li>
    </ul>
            </div>
        </div>
    </section>

</body>