const spinner =
    '<div class="spinner-border spinner-border-sm text-light" role="status"><span class="sr-only">Loading...</span></div>'
let allowedUserName,
    allowedEmail = false

/**
 * Register
 * Author: Hritik R
 */
$('#cmdRegister').on('click', function () {
    $(this).html(spinner)
    let username = $('#regUserName').val()
    let password = $('#regPassword').val()
    let confirmPassword = $('#regConfirmPassword').val()
    let email = $('#regEmail').val()
    if ($('#agreeBox').is(':checked')) {
        try {
            if (
                validateString(username) &&
                validateString(password) &&
                validateEmail(email) &&
                validatePassword(password, confirmPassword) &&
                allowedUserName &&
                allowedEmail
            ) {
                $.ajax({
                    type: 'POST',
                    url: 'register.php',
                    data: {username: username, password: password, email: email},
                    success: function (res) {
                        let response = JSON.parse(res)
                        $('#regMsg').html(response.msg)
                        $('#cmdRegister').html('Register')
                        if (response.code === 200) {
                            setTimeout(function () {
                                resetForm()
                                showLogin()
                            }, 2000)
                        }
                    },
                })
            }
        } catch (e) {
            alert(e)
            $('#cmdRegister').html('Register')
        }
    } else {
        alert('Please agree the terms & policies')
    }
})

/**
 * Login
 * Author : Hritik R
 */
$('#cmdLogin').on('click', function () {
    $(this).html(spinner)
    let username = $('#logUserName').val()
    let password = $('#logPassword').val()
    let timeCounter = 3
    try {
        if (validateString(username) && validateString(password)) {
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: {username: username, password: password},
                success: function (res) {
                    let response = JSON.parse(res)
                    $('#logMsg').html(response.msg)
                    $('#cmdLogin').html('Login')
                    if (response.code === 200) {
                        const interval = setInterval(function () {
                            $('.tm-c').html(timeCounter)
                            timeCounter = timeCounter - 1
                        }, 1000)
                        setTimeout(function () {
                            clearInterval(interval)
                            window.location.href = 'profile.html'
                        }, 4000)
                    }
                },
            })
        }
    } catch (e) {
        alert(e)
        $('#cmdLogin').html('Login')
    }
})

/**
 * Agree terms and policies
 * Author : Hritik R
 */
$('#agreeBox').on('click', function () {
    if ($(this).is(':checked')) {
        $('#cmdRegister').prop('disabled', false)
    } else {
        $('#cmdRegister').prop('disabled', true)
    }
})

/**
 * Check if username already exists
 * Author : Hritik R
 */
$('#regUserName').on('blur', function () {
    if ($(this).val().trim() == '') {
        return false
    }
    allowedUserName = false
    try {
        $.ajax({
            type: 'POST',
            url: 'DatabaseHelper.php',
            data: {checkUserName: true, username: $(this).val()},
            success: function (res) {
                let response = JSON.parse(res)
                if (response.code === 200) {
                    allowedUserName = true
                    $('#uMsg').html('')
                } else if (response.code === 400) {
                    allowedEmail = false
                    $('#uMsg').html(response.msg)
                }
            },
        })
    } catch (e) {
        alert(e)
    }
})

/**
 * Check if email address already exists
 * Author : Hritik R
 */
$('#regEmail').on('blur', function () {
    if ($(this).val().trim() == '') {
        return false
    }
    allowedEmail = false
    try {
        $.ajax({
            type: 'POST',
            url: 'DatabaseHelper.php',
            data: {checkEmail: true, email: $(this).val()},
            success: function (res) {
                let response = JSON.parse(res)
                if (response.code === 200) {
                    allowedEmail = true
                    $('#eMsg').html('')
                } else if (response.code === 400) {
                    allowedUserName = false
                    $('#eMsg').html(response.msg)
                }
            },
        })
    } catch (e) {
        alert(e)
    }
})

/**
 * Password Toggle
 * Author : Hritik R
 */
$('.toggle-password').on('click', function () {
    $(this).toggleClass('fa-eye fa-eye-slash')
    let field = $(this).parent().prev()
    field.attr('type', field.attr('type') === 'password' ? 'text' : 'password')
})

/**
 * Return true if data is not empty
 * Author : Hritik R
 */
function validateString(data) {
    if (!data.isEmpty && data.trim() !== '') {
        return true
    }
    throw 'Username or Password cannot be empty!'
    return false
}

/**
 * Return true if email is valid
 * Author : Hritik R
 */
function validateEmail(email) {
    let regCheck = email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
    )
    if (regCheck) {
        return true
    } else {
        throw 'Invalid Email address'
        return false
    }
}

/**
 * Return true if password matches and length >= 8
 * Author : Hritik R
 */
function validatePassword(pass, conpass) {
    if (pass === conpass) {
        if (!pass.length >= 8) {
            throw 'Password must be 8 characters long'
        }
        return true
    } else {
        throw 'Password does not match'
    }
}

/**
 * Reset Form
 * Author : Hritik R
 */
function resetForm() {
    $('.modal input').val('')
    $('.TAOT-authmsg').html('')
}

/**
 * Show Login Modal
 * Author : Hritik R
 */
function showLogin() {
    $('#FormRegisterModal, #FormLoginModal').modal('toggle')
}
