<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>

<style>
    body {
        width : 100%;
    }
    /*header*/
    .header ul{
        display : flex;
    }

    .header li{
        list-style: none;
    }

    .header a{
        margin : 0 10px;
        text-decoration:none;
        color: black;
        font-size : 20px;
        justify-content:center;
        align-items:center;
    }

    /*article*/
    .article {
        width: 80%;
        margin:auto;
        
    }

    .article h1{
        margin-top : 20px;
        margin : auto;
        justify-content : center ;
        text-align : center;
    }

    .add {
        display : flex;

    }
    
    .name_category{
        border : 1px solid black;
        border-radius: 5px 0 0 5px;
        font-size:30px;
        padding: 8.5px;
    }

    .search_category{
        border-radius : 0 5px 5px 0;
        height:50px;
        margin-top:30px;
        width: 70%;
    }

    

    .button{
        margin : 0 6px;
        margin-top : 10px;
        width : 80%;
        display : flex;
        justify-content: flex-end;
        align-items: center;
    }

    .button button {
        font-size : 20px;
        margin: 0 5px;
    }

    /*footer*/
    .footer{
        text-align: center;
        justify-items: center;
        margin: auto;
        margin-top: 10px;
    }
</style>
<body>
    <div class="header">
        <ul>
            <li><a href="" style = "font-size:30px;">Administrator</a></li>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Trang ngoài</a></li>
            <li><a href="" style = "font-weight:bold;" >Thể loại</a></li>
            <li><a href="">Tác giả</a></li>
            <li><a href="">Bài viết</a></li>
        </ul>
    </div>

    <hr>

    <div class="article">
        <h1>THÊM THỂ LOẠI MỚI</h1>

        <div class="add">
            <p class = "name_category">Tên thể loại</p>
            <input type="text" class = "search_category">
        </div>

        <div class="button">
            <button id = "them">Thêm</button>
            <button id = "back">Quay lại</button>
        </div>
    </div>

    <div class="footer">
        <hr>
        <h1>TLU'S MUSIC GARDEN</h1>
    </div>
</body>
</html>