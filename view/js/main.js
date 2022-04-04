/*==================== LOAD MENU ====================*/
function load_menu() {
    $("#logged").remove();
    ajaxPromise('module/login/controller/controller_login.php?op=data_user', 'POST', 'JSON', { token: localStorage.getItem('token') })
        .then(function(data) {
            if (data.type === 'admin') {
                console.log("b");
                menu_admin(data);
            } else if (data.type === 'client') {
                menu_client(data);
            }
        }).catch(function(e) {
            var Element_login = document.createElement('li');
            Element_login.id = 'iniciar_sesion';
            Element_login.innerHTML = "<a href='index.php?page=login&op=login_view'>Iniciar Sesión</a>";
            document.getElementById("header_menu").appendChild(Element_login);
            var Element_register = document.createElement('li');
            Element_register.id = 'registrarse';
            Element_register.innerHTML = "<a href='index.php?page=login&op=register_view'>Registrarse</a>";
            document.getElementById("header_menu").appendChild(Element_register);
        });
}

/*==================== CLICK LOGOUT ====================*/
function click_logout() {
    $(document).on('click', '#logout', function() {
        logout();
    });
}

/*==================== LOGOUT ====================*/
function logout() {
    /* ajaxPromise('module/login/controller/controller_login.php?op=logout', 'POST', 'JSON') */
    $.ajax({
        url: "module/login/controller/controller_login.php?op=logout",
        type: 'POST',
        dataType: 'JSON',
    }).done(function() {
        localStorage.removeItem('token');
        window.location.href = "index.php?page=controller_home&op=list";
    }).fail(function(e) {
        console.log(e);
        console.log('Something has occured');
    });
}

/*==================== MENUS ====================*/
function menu_admin(data) {

}

function menu_client(data) {
    var Element_login = document.createElement('li');
    Element_login.id = 'logged';
    Element_login.innerHTML = "<img id='avatar' src='" + data.avatar + "' style='width:50px;height:50px;'/><span id='user' style='color:white;'>Bienvenido " + data.username + "<a href='' id='logout' style='color:grey;padding-left:10px;'>Log out</a></span>'";
    document.getElementById("header_menu").appendChild(Element_login);
}

$(document).ready(function() {
    load_menu();
    click_logout();
});