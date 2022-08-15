<?php
include('header.php');
?>
<style>
.login {
  background-color:dimgrey; 
}

.login input{
display:block;
margin: 5px 0px 0px 0px;

}
.login p{
    color:red
}
.login p{
    display:block;
margin: 0px 0px 0px 62px;
}
</style>
<form action="iletisim_post.php" method="post" class="login">
    <p>
    Adınız <br><input type="text" name="name" ><br>
    Soyadınız <br> <input type="text" name="surname" ><br>
    Kullanıcı adı<br> <input type="text" name="username"><br>
    Eposta adresiniz<br> <input type="text" name="email"><br>

    
    
    Erkek <input type="radio" name="cinsiyet" value="1" checked="on"> 
    Kadin <input type="radio" name="cinsiyet" value="2"> 
    <input type="submit" value="Send">
     <input type="reset" value="Sıfırla">

     <?
      ################
      # ad_soyad.php #
      ################
      echo "Adınız $name ve soyadınız $surname.";
     ?>
    </P>
 </form>

 <?php
include('footer.php');
?>
