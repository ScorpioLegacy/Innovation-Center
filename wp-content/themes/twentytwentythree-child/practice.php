<?php 
<style>
    /* Apply a clearfix to clear floats */
    .clearfix {
        padding: 5%;
        
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Style for columns */
    .column {
        float: left;
        width: 27%; /* You can adjust the width based on your needs */
        box-sizing: border-box;
        padding: 15px; /* Adjust padding as needed */
    }

    .column-span {
        float: left;
        width: 54%; /* You can adjust the width based on your needs */
        box-sizing: border-box;
        padding: 15px; /* Adjust padding as needed */
    }



    
</style>
</head>


<div class="clearfix">
    <div class="column" style="background-color: aqua; margin: 3%; text-align: center;">
        <!-- Content for the first column -->
        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" style=" width: 300px;
        height: 300px;">
    </div>

    <div class="column-span" style="background-color: red;margin: 3%;">
        <!-- Content for the second column -->
        <h2>Column 2</h2>
        <p>Your content goes here.</p>
    </div>


</div>
    
    


?>