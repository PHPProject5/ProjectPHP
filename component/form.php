<?php
    $form="
        <div class='global-container'>  
            <div class='card login-form'> 
            <div class='card-body'>
                <img class='user-icon' src='assets/user.png'/>
                <h3 class='card-title text-center'>Selamat Datang</h3>
                    $gagal
                <div class='card-text'>  
                    <form action='' method='post'>  
                        <div class='form-group'>  
                            <label for='exampleInputEmail1'> Username </label>  
                            <input name='username' type='text' class='form-control form-control-sm' id='exampleInputEmail1' aria-describedby='emailHelp'>  
                        </div>  
                        <div class='form-group'>  
                            <label for='exampleInputPassword1'> Password </label>  
                            <a href='#' style='float:right;font-size:12px;'> Lupa password? </a>  
                            <input name='password' type='password'  class='form-control form-control-sm' id='exampleInputPassword1'>  
                        </div>  
                        <button name='login' type='submit' class='btn btn-primary btn-block'> Login </button> 
                    </form>  
                </div>  
            </div> 
            </div>
        </div>
    ";
?>