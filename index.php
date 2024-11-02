<?php include('layouts/header.php'); ?>

<div class="container gap-3 mb-3 mt-5" >
    <div class="text-center ">
        <h1 style="color: black;">Qual é o seu signo?</h1>

        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="mb-3">
                <label for="data_nascimento" class="form-label text-center w-10 p-3">Informe sua data de nascimento</label> <br>
                <input type="date" class=" w-600 " id="data_nascimento" name="data_nascimento" required>
            </div> 
            <div class="text-center">
                <button type="submit" class="btn" style="background-color: #007bff; color: white; border-radius: 25px;">Ver meu signo</button>
            </div>
         </form>
   
    </div>

</div>

<?php include('layouts/footer.php'); ?>
