function confirmDelete(name, id) {
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
      text: `Kamu tidak dapat mengembalikan data ${name} !`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons
          .fire("Deleted!", `Menghapus data : ${name}`, "success")
          .then(() => {
            const formDelete = document.getElementById(`form-delete-${id}`);
            formDelete.submit();
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelled",
          `Gagal menghapus data : ${name}`,
          "error"
        );
      }
    });
}
