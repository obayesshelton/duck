<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
            }
            body{
                margin-top: 30px;
                font: 400 18px/1 'Kaushan Script', cursive;
                background-color: #eeeeee;
                text-align: center;
            }
            .polariods{
                display: inline-block;
                width: 530px;
                margin: 20px auto;
            }
            .polariods li{
                display: inline-block;
                list-style: none;
                margin: 20px auto;
                padding: 15px;
                text-align: center;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
            }
            .polariods span{
                display: block;
                margin-top: 10px;
                text-align: center;
            }
            .active .hover{
                display: none;
            }
            .active:hover .state{
                display: none;
            }
            .active:hover .hover{
                display: inline-block;
            }
        </style>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-47840763-3', 'where-is-my-duck.co.uk');
          ga('send', 'pageview');

</script>

    </head>

    <body>
        <h1>Where is my Duck?</h1>
        <ul class="polariods">
            <li class="active">
                <img src="https://farm4.staticflickr.com/3768/13609881584_8a10b26b4c.jpg" class="state">
                <img src="https://farm4.staticflickr.com/3801/13609881724_dbd5e1dca0.jpg" class="hover">
                <span>Hover over me to see what they did!!</span>
            </li>
            <li>
                <img src="https://farm8.staticflickr.com/7349/13589867724_f7ffd43d64.jpg">
                <span>Things are getting screwed up!</span>
            </li>
            <li>
                <img src="https://farm4.staticflickr.com/3819/13589490405_b6a15bfe7e.jpg">
                <span>Help, they've really hit the nail on the head!</span>
            </li>
            <li>
                <img src="https://farm8.staticflickr.com/7337/13589488975_2df58c5182.jpg">
                <span>I am feline scared!</span>
            </li>
            <li>
                <img src="https://farm4.staticflickr.com/3688/13589868954_bd996b9428.jpg">
                <span>Hang in there</span>
            </li>
            <li>
                <img src="https://farm8.staticflickr.com/7410/13597809075_2d8669d435.jpg">
                <span>Intercepted by pirates on the way to Africa!</span>
            </li>
            <li>
                <img src="https://farm8.staticflickr.com/7229/13589531373_61c3f50be1.jpg">
                <span>Help, I'm feeling the squeeze!</span>
            </li>
            <li>
                <img src="https://farm4.staticflickr.com/3799/13582517374_43dd2d4d98.jpg">
                <span>A duck has had its feathers ruffled!</span>
            </li>
            <li>
                <img src="https://farm8.staticflickr.com/7450/13581211105_cf090dc913.jpg">
                <span>Quack, nearly made it home......!</span>
            </li> 
            <li>
                <img src="https://farm4.staticflickr.com/3748/13568241533_bf0588be3e.jpg">
                <span>Help, it's nearly Lunchtime!</span>
            </li>   
            <li>
                <img src="https://farm8.staticflickr.com/7006/13577569215_0336a56de0.jpg">
                <span>I wheeley need help!!</span>
            </li>
            <li>
                <img src="https://farm6.staticflickr.com/5329/13568546474_b0c3b6313c.jpg">
                <span>Help me!</span>
            </li>   
        </ul>
    </body>
</html>
