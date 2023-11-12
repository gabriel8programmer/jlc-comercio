<!-- bootstrap script -->
<script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
<!--javascript script custom-->
<script src="./assets/js/app.js"></script>
<!--jquery cdn-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>1

<!--code async-->

<!-- to try edition of the profile of a user in database-->
<script>
    const nameFrm = "#edit-profile-frm"

    $(nameFrm).submit((e)=> {
        e.preventDefault()
        console.log(e.target)
    })
    
</script>
</body>

</html>