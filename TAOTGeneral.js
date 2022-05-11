function NShowNotification(type, message) {
    try {
        var opts = {
            closeButton: true,
            debug: false,
            positionClass: 'toast-top-right',
            onclick: null,
            showDuration: '300',
            hideDuration: '1000',
            timeOut: '5000',
            extendedTimeOut: '1000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
        }
        switch (type) {
            case 'success':
                toastr.success(message, 'Success', opts)
                break
            case 'info':
                toastr.info(message, 'Information', opts)
                break
            case 'warning':
                toastr.warning(message, 'Warning', opts)
                break
            case 'error':
                toastr.error(message, 'Error', opts)
                break
            default:
                toastr.info(message, 'Information', opts)
                break
        }
    } catch (e) {
        alert(e)
    }
}

