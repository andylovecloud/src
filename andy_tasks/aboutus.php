<?php 
include 'header.php'; 
?>
<div class = "container">
<h2> About us <h2>
<script>
    //This is the comment
    document.write ("Hello World");
    // window.alert("this is an alert box! ")
</script>    

<script>
    function hello()
    {
        window.alert("This is after the page has loaded")
    }
</script>
    <br>
    <button onclick="hello()"> Click Me </button><br>
    <button onclick="document.write('This is something')"> Click Me 2</button>

</div>
<?php include 'footer.php'; ?>