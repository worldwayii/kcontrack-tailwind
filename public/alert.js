window.addEventListener('alert', (event) => {
    detail = event.detail;
    console.log(detail)
    Swal.fire({
        position: detail.position,
        icon: detail.type,
        title: detail.title,
        showConfirmButton: false,
        timer: detail.timer
      });
})
