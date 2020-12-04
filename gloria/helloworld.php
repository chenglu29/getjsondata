<?php
/**
*@package Gloria
*/
/*
Plugin Name: Gloria
Description: debug my code
Author: Gloria Cheng
Plugin URI: http://localhost:8888/wordpress3/gloria
*/

if(!defined('ABSPATH')){
	die;
}
?>
<!-- 
-->
<?php
//        $response = wp_remote_get('https://jsonplaceholder.typicode.com/users');
//		$data = wp_remote_retrieve_body($response);
//		echo $data;
//		$apiInfo = json_decode($data); // Load data into runtime cache
//		echo $apiInfo;
?>


<?php
add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
     $response = wp_remote_get('https://jsonplaceholder.typicode.com/users');
        $data = wp_remote_retrieve_body($response);
        //echo $data;
        //echo '<br>';
        $decodedata=json_decode($data);
    ?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
    <table border="1" id="users">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UserName</th>
        </tr>
        </thead>    
        <tbody>
    <?php
        foreach($decodedata as $obj){
    ?>
        <tr>
            <td><?php echo'<a href="#" onclick="return getID('.$obj->id.')" >'.$obj->id.'</a>'?></td> 
            <td><?php echo $obj->name; ?></td> 
            <td><?php echo $obj->username; ?></td> 
        </tr>
        
         <?php   
        }
        ?>
        </tbody>
</table><br>
<div class="demo" id="demo">should be changed</div>


</body>
</html>
<?php } ?>

<script>
function getID(param){
    var ID=param;
 //   alert(ID);
    var url = 'https://jsonplaceholder.typicode.com/users/'+ID;
 //   alert(url);
 //   $("#demo").html("CCCCCCCC");
    $.getJSON(url,function(data){
         //   var text = 'Date: ${data.date}<br>
         //   Time: ${data.time}<br>
         //   Unix time: ${data.milliseconds_since_epoch}'
         console.log(data);
         var newjson = JSON.stringify(data.id);
         console.log(newjson);
         document.getElementById("demo").innerHTML='<table border="1" id="details2"><thead> <th>id</th><th>name</th><th>username</th><th>email</th><th>address.street</th><th>address.suite</th><th>address.city</th><th>address.zipcode</th><th>address.geo.lat</th><th>address.geo.lng</th><th>phone</th><th>website</th><th>company.name</th></thead><tbody><tr><td>'+JSON.stringify(data.id)+'</td><td>'+JSON.stringify(data.name)+'</td><td>'+JSON.stringify(data.username)+'</td><td>'+JSON.stringify(data.email)+'</td><td>'+JSON.stringify(data.address.street)+'</td><td>'+JSON.stringify(data.address.suite)+'</td><td>'+JSON.stringify(data.address.city)+'</td><td>'+JSON.stringify(data.address.zipcode)+'</td><td>'+JSON.stringify(data.address.geo.lat)+'</td><td>'+JSON.stringify(data.address.geo.lng)+'</td><td>'+JSON.stringify(data.phone)+'</td><td>'+JSON.stringify(data.website)+'</td><td>'+JSON.stringify(data.company.name)+'</td></tr></tbody></table>';
             

          //  $(".demo").html(text);
      });
   // document.getElementById("demo").innerHTML="CCCCCCC";
}
</script>

