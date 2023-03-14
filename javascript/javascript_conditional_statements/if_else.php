
<script type="text/javascript">

function display()
{
    var nm=document.getElementById("name").value;
    document.getElementById("mn").innerHTML="Your name is :"+nm;
}

</script>

<center>

<p id="mn"></p>    
<form>

Input name :<input type="text" name="nm" id="name" placeholder="Enter Name">

<br><br>

<button type="button" onclick="display()">Check >></button>

</form>