window.addEventListener("swal:delete", (event) => {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: true,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Apa kamu yakin?",
      text: `Kamu tidak dapat mengembalikan data ${event.detail.title} !`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons
          .fire("Deleted!", `Menghapus data : ${event.detail.title}`, "success")
          .then(() => {
            window.livewire.emit("destroy", event.detail.id);
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelled",
          `Gagal menghapus data : ${event.detail.title}`,
          "error"
        );
      }
    });
});
