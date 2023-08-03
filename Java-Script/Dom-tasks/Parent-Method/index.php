<!DOCTYPE html>
<html id="main">
<head>
    <title>DOM Navigation</title>
</head>
<style>
    #outer{
        width: 550px;
        height: 300px;
        padding:10px 10px;
        margin: 0 auto;
        background: lightsalmon;
    }

    #inner{
       width: 500px;
        height: 200px;
        padding:10px 10px;
        margin:0 auto ;
        background: mediumorchid;
    }

    #inner div{
        display: inline-block;
        background: #fff;
        width: 95px;
        height: 50px;
        line-height: 50px;
        text-align: center;
    }
</style>
<body>
    <div id="outer">
        <h2>Outer</h2>
        <div id="inner">
            <h2>Inner</h2>
            <div>A</div>
            <div>B</div>
            <div id="child-c">C</div>
            <div>D</div>
            <div>E</div>
        </div>
    </div>
    <script src="js/dom-nav.js"></script>
</body>
</html>