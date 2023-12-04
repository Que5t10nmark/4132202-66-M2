<form >
    <label for="id_p"></label>
    <input type="text" namae ="id" id="id_p"><br>
    <label for="name_p"></label>
    <input type="text" namae ="name" id="name_p"><br>
    <label for="email_p"></label>
    <input type="text" namae ="email" id="email_p"><br>
    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class = "btn btn-danger">CANCLE</button>
</form>

<script>
    $(function(){
        $("form").submit(function(e){
            e.preventDefault();

        let fm = $(this);    
            $.ajax({
                url:"/add_member.php",
                method:"POST",
                data:fm.serialize(),
                success:function(res){
                    if(res == 'error')
                    alert("Can't insert data.")
                    else
                    $("#tb_member").load("/listitem.php")
                }
            });
        });
    });
</script>