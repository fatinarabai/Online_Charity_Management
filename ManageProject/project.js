$(document).ready(function(){

    $('.btn-danger.a-btn-slide-text').on('click',function(){

        rec = $(this).data("deleteid");
        console.log(rec);
         
        $('#modalDelete').modal();
        input2= "<a href='delete.php?id="+rec+"'><button type='submit' name='deleteproject' class='btn btn-danger'>Delete</button></a>";
        document.getElementById('iddelete').innerHTML=input2;
    });
});