const pesan = {
    berhasil: function(pesan) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: pesan,
            showConfirmButton: true,
            toast: true
        });
    },
    gagal: function(pesan) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: pesan,
            showConfirmButton: true,
            toast: true
        });
    }
};

const btnDelete = document.querySelector(".btnDelete");
const formDelete = document.querySelector(".formDelete");

btnDelete.addEventListener("click", function(e) {
    id = e.target.dataset.id;
    title = e.target.dataset.title;
    Swal.fire({
        title: `Yakin ingin menghapus ${title}?`,
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then(result => {
        if (result.isConfirmed) {
            document.querySelector(`#delete${id}`).submit();
        }
    });
});
