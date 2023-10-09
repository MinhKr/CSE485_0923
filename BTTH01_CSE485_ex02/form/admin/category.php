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
        width : 90%;
        margin : auto ; 
        justify-items : center ;
    }



    .button button{
        background-color: #198754;
        color : white;
        font-size:20px;
        height:50px;
        width:120px;
        border : none;
        border-radius : 5px;
    }

    .title {
        font-weight : bold;
        margin : 0 20px;
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
        <div class="button">
            <button>Thêm mới</button>
        </div>

        <div class="list">
            <table>
                <tr style = " font-weight:bold;">
                    <td class = "title" style = "font-weight : bold;">#</td>
                    <td class = "title">Tên thể loại</td>
                    <td class = "title">Sửa</td>
                    <td class = "title">Xoá</td>
                </tr>
                <hr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            
        </div>
    </div>

    <div class="footer">
        <hr>
        <h3>TLU'S MUSIC GARDEN</h3>
    </div>
</body>
</html>