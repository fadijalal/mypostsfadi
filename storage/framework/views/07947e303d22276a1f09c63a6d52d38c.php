<!DOCTYPE html>
<html>
    <head>
<title>home2</title>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bgimg {
        background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }

    ul {
        display: flex;
        list-style: none;
        justify-content: space-around;
        padding-top: 10px;

    }

    nav {
        background-color: black;
        margin: 20px;
        height: 40px;
    }
</style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">home</a> </li>
            <li><a href="/contuntus">contact us</a></li>
            <li><a href="/about2">about</a></li>
           
        </ul>
    </nav>
    <div class="bgimg">
        <div class="topleft">
            <p>Logo</p>
        </div>
        <div class="middle">
            <h1>COMING SOON</h1>
            <hr>
            <p>35 days left</p>
        </div>
        <div class="bottomleft">
            <p>Some text</p>
        </div>
    </div>

</body>

</html><?php /**PATH C:\Users\Administrator\Desktop\sites\example-app\resources\views/home2.blade.php ENDPATH**/ ?>