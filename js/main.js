function edit(){
    document.getElementById('account_cancel_save').style.display = "block"
    document.getElementById('account_edit').style.display = "none"
    document.getElementById('account_confirm_password').style.display = "block"
    document.getElementById('account_confirm_password1').style.display = "block"

    document.getElementById('account_email').style.pointerEvents = "all"
    document.getElementById('account_username').style.pointerEvents = "all"
    document.getElementById('account_password').style.pointerEvents = "all"
    document.getElementById('account_password').value=""
    document.getElementById('account_password1').style.pointerEvents = "all"
}
