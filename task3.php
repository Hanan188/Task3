
</head>
<body>

  <?php
  $database=mysqli_connect("localhost","root","","task2");
  if (isset($_POST['DisplayDB'])) {
    ?>

<table border="2" style="margin:30px">
<tr>
  <td>Forward</td>
  <td>Backward</td>
  <td>Left</td>
  <td>Right</td>
  <td>Stop</td>



</tr>
<?php

$query ="SELECT * FROM `task2`";
$records = mysqli_query($database,$query)or die( mysqli_error($database)); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['forward']; ?></td>
    <td><?php echo $data['backward']; ?></td>
    <td><?php echo $data['left']; ?></td>
    <td><?php echo $data['right']; ?></td>
    <td><?php echo $data['stop']; ?></td>


  </tr>
<?php
}}
?>
</table>
<?php
 mysqli_close($database); 
 ?>
 <script>
  window.watsonAssistantChatOptions = {
      integrationID: "2562863c-0dd7-45ce-a469-62acc3151bfd", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "d8935f57-3ec3-4267-ae86-910a3dfa026d", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>