<?php include "../pages/check_login.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write content</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- <link rel="stylesheet" href="/project/style.css"> -->
    <script>
        function check_input() {
            if(!document.board_form.subject.value){
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }
            if(!document.board_form.content.value){
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }
    </script>
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
  body {
    background-color: #000;
    color: #eee;
    font-family: Arial, sans-serif;
  }

  #main_content {
    width: 500px;
    margin: 50px auto;
    padding: 30px;
    background-color: #111;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255,255,255,0.1);
    margin-top: 150px;
  }

  #main_content h2 {
    text-align: center;
    margin-bottom: 30px;
    color: white;
  }

  .form {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }
 
  .form.username{
    background-color: transparent;
  }
  .form.title{
    background-color: transparent;
  }

  .form .col1 {
    width: 120px;
    color: white;
  }
  .form .col2{
    color: white;
  }

  .form .col2 input {
    width: 300px;
    padding: 6px;
    background-color: white;
    border: 1px solid #555;
    color: black;
    border-radius: 3%;
  }
  .form .col2 textarea{
    width: 300px;
    height: 300px;
    border: 1px solid #555;
    color: black;
  }

  .form h2{
    color: white;
  }
  

  .col3 img {
    vertical-align: middle;
  }

  .bottom_line {
    border-top: 1px solid #333;
    margin: 20px 0;
  }

  .buttons {
    text-align: center;
  }

  .buttons img {
    cursor: pointer;
  }

  .clear {
    clear: both;
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
                WRITE
            </h3>
<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost","khlee","hyos8603@@","sample");
    $sql = "select * from board where num=$num";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $name = $row["name"];
    $subject = $row["subject"];
    $content = $row["content"];
    $file_name = $row["file_name"];
?>            
            <form name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?= $page ?>" enctype="multipart/form-data">
                <h2>CONTENTS</h2>
                <div class="form username">
				        <div class="col1">USERNAME : </div>
				        <div class="col2"><?=$name?></div>  
			    </div>
			       	<div class="clear"></div>

			    <div class="form title">
				        <div class="col1">TITLE : </div>
				        <div class="col2">
							<input type="text" name="subject" value="<?=$subject?>">
				        </div>                 
			    </div>
			       	<div class="clear"></div>
			       	<div class="form content">
				        <div class="col1">CONTENTS : </div>
				        <div class="col2">
							<textarea name="content" id="content"><?=$content?></textarea>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form upfile">
                        <div class="col1">ATTACHMENT : </div>
                        <div class="col2"><?=$file_name?></div>
                    </div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="/project/img/button_save.gif" onclick="check_input()">&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="/project/img/button_reset.gif"
                  			onclick="location.href='/project/pages/board_list.php'">
                        <button type="button" onclick="location.href='board_list.php'">LIST</button>
	           		</div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>
