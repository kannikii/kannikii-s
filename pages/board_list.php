<?php include "../pages/check_login.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_form</title>
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

#board_box {
    background-color: #1c1c1c;
    padding: 15px;
    border-radius: 6px;
    border: 1px solid #333;
}

/* 게시판 리스트 */
#board_list {
    list-style: none;
    padding: 0;
    margin: 0;
}

#board_list li {
    display: flex;
    padding: 10px;
    border-bottom: 1px solid #333;
    align-items: center;
    background-color: transparent;
}

#board_list li:first-child {
    background-color: #2a2a2a;
    font-weight: bold;
    border-bottom: 2px solid #555;
}

#board_list li span {
    padding: 0 10px;
}

/* 각 컬럼 크기 비율 */
.col1 { width: 8%; text-align: center; }
.col2 { width: 30%; background-color: transparent;}
.col3 { width: 15%; text-align: center; }
.col4 { width: 10%; text-align: center; font-size: smaller; margin-left: 1%;}
.col5 { width: 15%; text-align: center; margin-left: 4%;}
.col6 { width: 10%; text-align: center; margin-left: 3%;}

/* 링크 스타일 */
a {
    color: #ddd;
    text-decoration: none;
}

a:hover {
    color: #fff;
}

/* 페이지 번호 */
#page_num {
    display: flex;
    list-style: none;
    padding: 0;
    margin-top: 15px;
    justify-content: center;
    background-color: transparent;
}

#page_num li {
    margin: 0 5px;
}

#page_num a {
    padding: 5px 10px;
    background-color: #2e2e2e;
    border-radius: 4px;
    color: #ccc;
    font-size: 14px;
}

#page_num a:hover {
    background-color: #444;
    color: #fff;
}

/* 버튼 영역 */
.buttons {
    display: flex;
    justify-content: flex-end;
    list-style: none;
    padding: 0;
    margin-top: 20px;
}

.buttons button {
    background-color: #2e2e2e;
    border: 1px solid #555;
    color: #ddd;
    padding: 7px 15px;
    margin-left: 8px;
    border-radius: 4px;
    cursor: pointer;
}

.buttons button:hover {
    background-color: #444;
    color: #fff;
}

    </style>
</head>
<body style="background-color: black; color: white;">
    <header>
        <?php include "../includes/header.php";?>
    </header>
    <section>
        <div id="main_content">
            <div id="board_box">
                <h3>POSTS</h3>
                <ul id="board_list">
                <li>
                    <span class="col1">NO.</span>
                        
                    <span class="col2">TITLE</span>
                    
                    <span class="col3">AUTHOR</span>
                    
                    <span class="col4">ATTACHMENT</span>
                    
                    <span class="col5">DATE</span>
        
                    <span class="col6">VIEWS</span>
                </li>
                <?php
                    if(isset($_GET["page"])) { $page = $_GET["page"]; }
                    else { $page = 1; }

                    $con = mysqli_connect("localhost","khlee","hyos8603@@","sample");
                    $sql = "select * from board order by num desc";
                    $result = mysqli_query($con,$sql);
                    $total_record = mysqli_num_rows($result); //전체 글 수

                    $scale = 7;

                    //전체 페이지 수 계산
                    if($total_record % $scale == 0) {
                        $total_page = floor($total_record / $scale);
                    }
                    else { $total_page = floor($total_record / $scale)+1; }

                    $start = ($page -1) * $scale;
                    $number = $total_record- $start;

                    for($i = $start; $i <$start+$scale && $i<$total_record; $i++) {
                        mysqli_data_seek($result, $i);
                        $row = mysqli_fetch_array($result);
                        $num = $row["num"];
                        $id = $row["id"];   
                        $name = $row["name"];
                        $subject = $row["subject"];
                        $regist_day = $row["regist_day"];
                        $hit = $row["hit"];

                        if($row["file_name"]) 
                            $file_name = "<img src='/project/img/file.gif>";
                        else
                            $file_name = " ";
                ?>
                        <li>
                            <span class="col1"><?=$number?></span>
                            <span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?> 
                            </a></span>
                            <span class="col3"><?=$name?></span>
                            <span class="col4"><?=$file_image?></span>
                            <span class="col5"><?=$regist_day?></span>
                            <span class="col6"><?=$hit?></span>
                        </li>
                <?php
                    $number--;
                }
                mysqli_close($con);
                ?>  
                </ul>
                <ul id="page_num">
            <?php
                if ($total_page >=2 && $page >= 2) {
                    $new_page = $page -1;
                    echo "<li><a href='board_list.php?mode=$mode&page=$new_page'> ◀ Prev </a> </li>";
                }
                else  echo"<li>&nbsp;</li>";

                //게시판 목록 하단 페이지 링크 번호 출력
                for($i =1; $i<=$total_page; $i++) {
                    if($page ==$i){
                        echo "<li><b> $i </b></li>";
                    }
                    else {
                        echo "<li> <a href = 'board_list.php?mode=$mode&page=$i'> $i </a></li>";
                    }
                }
                if ($total_page >= 2&& $page != $total_page) {
                    $new_page = $page + 1;
                    echo "<li> <a href='board_list.php?mode=$mode&page=$new_page'> Next ▶ </a></li>";
                }
                else echo "<li>&nbsp;</li>";
            ?>
                </ul>
                <ul class="buttons">
                <li><button onclick="location.href='board_list.php'">LISTS</button>
            <?php
                if($userid) {
            ?>
                <button onclick="location.href='board_form.php'">WRITE</button>
            <?php
                }else {
            ?>
            <?php
                session_start();
                $userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : '';
            ?>  
                <button onclick="alertAndGo()">WRITE</button>

                <script>
                function alertAndGo() {
                    // PHP 변수를 JS 변수로 넘김
                    var userid = "<?php echo $userid; ?>";
                    if (userid === "") {
                        alert('로그인 후 이용해 주세요!');
                        window.location.href = 'login_form.php';
                    } else {
                        window.location.href = 'board_form.php';
                    }
                }
                </script>

            <?php
                }
            ?>
            </li>
            </ul>
            </div>
        </div>
    </section>

</body>
</html>
